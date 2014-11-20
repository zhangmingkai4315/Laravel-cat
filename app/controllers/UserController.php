<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/2
 * Time: 下午10:44
 */

class UserController
    extends Controller{
    public function loginAction(){

        $errors=new \Illuminate\Support\MessageBag();


        if($old=Input::old("errors"))
        {
            $errors=$old;
        }
        $data=[
            "errors"=>$errors
        ];
        if(Input::server("REQUEST_METHOD")=="POST")
        {


            $validator=Validator::make(Input::all(),[
              "username"=>"required",
              "password"=>"required"
            ]);
            if($validator->passes())
            {
                $credentials=[
                    "username"=>Input::get("username"),
                    "password"=>Input::get("password")
                ];

                if(Auth::attempt($credentials,true))
                {

                    return Redirect::route("user/profile");

                }else
                {
                    $data["errors"]=new \Illuminate\Support\MessageBag([
                        "password"=> [
                            "Username and password Mismatch!"
                        ]

                    ]);
                    return \Illuminate\Support\Facades\Redirect::route("user/login")
                        ->withInput($data);
                }



            }

            else
            {
                //echo "Invalide match!";
                $data["errors"]=new \Illuminate\Support\MessageBag([
                    "password"=> [
                        "Username and/Or password invalid"
                    ]

                ]);

                $data["username"]=Input::get("username");

                return \Illuminate\Support\Facades\Redirect::route("user/login")
                    ->withInput($data);


              }

        }
        return View::make("user/login",$data);
    }



public function profileAction(){
 return View::make("user/profile");

}


    public function logoutAction()
    {
        Auth::logout();
        return Redirect::route("user/login");
    }

    public function requestAction()
    {
        $data=["request"=>Input::old("request")];
        if(Input::server("REQUEST_METHOD")=="POST"){
            $validator=Validator::make(Input::all(),
            ["email"=>"required|email"]);
            if($validator->passes())
            {
                $credentials=["email"=>Input::get("email")];
                Password::remind($credentials,function($message,$user)
                {
                    $message->from("chris@example.com");
                    $message->subject("Your Password Reset Email!");
                });
                $data["requested"]=true;
                return Redirect::route("user/request")
                    ->withInput($data);
            }
        }
        return View::make("user/request",$data);
    }


    public function resetAction(){
        $token="?token=".Input::get("token");//重建整个后缀
        $errors=new \Illuminate\Support\MessageBag();
        if($old=Input::old("error"))
        {
            $errors=$old;
        }
        $data=[
            "token"=>$token,
            "errors"=>$errors
        ];
        if(Input::server("REQUEST_METHOD")=="POST"){

            $validator=Validator::make(Input::all(),[
                "email"=>"required|email",
                "password"=>"required|min:6",
                "password_confirmation"=>"same:password",
                "token"=>"exists:token,token"
            ]);
            if($validator->passes())
            {

               $credentials=["email"=>Input::get("email"),
                 "password"=>Input::get("password"),
                 "password_confirmation"=>Input::get("password_confirmation"),
                 "token"=>Input::get("token"),
                ];
              //  var_dump($credentials);
                   Password::reset($credentials,function($user,$password){
                    $user->password=Hash::make($password);

                    $user->save();
                    // $data["error"]=var_dump($user);

                    Auth::login($user);


                return Redirect::route("user/profile");

               });

            }
            $data["email"]=Input::get("email");
            $data["error"]=$validator->errors();
            //$data['error']="Token:".$token;


            return Redirect::to(URL::route("user/reset").$token)
                ->withInput($data);
        }

        return View::make("user/reset",$data);
    }
    function SignInAction(){


        /*
                $input=Input::all();
                $rules=array( "username"=>"required|unique:user",
                    "email"=>"required|email|unique:user",
                    "password"=>"required|confirmed|min:6"
                );
                $validator=Validator::make($input,$rules);
                if($validator->passes())
                {
                    User::create($input);
                    return Redirect::route('user/profile');
                }

                return  Redirect::route('user/SignIn')
                    ->nput()
                    ->withErrors($validator)
                    ->with('message','There were validation errors.');
        */

              $errors=new \Illuminate\Support\MessageBag();


                if($old=Input::old("errors"))
                {
                    $errors=$old;
                }
                $data=[
                    "errors"=>$errors
                ];
                if(Input::server("REQUEST_METHOD")=="POST")
                {


                    $validator=Validator::make(Input::all(),[
                        "username"=>"required|unique:user",
                        "email"=>"required|email|unique:user",
                        "password"=>"required|confirmed|min:6",

                    ]);
                    if($validator->passes())
                    {
                        $credentials=[
                            "username"=>Input::get("username"),
                            "password"=>Hash::make(Input::get("password")),
                            "email"=>Input::get("email")
                        ];



                        if(User::create($credentials))
                        {

                            return Redirect::route("user/profile");

                        }else
                        {
                            $data["errors"]=new \Illuminate\Support\MessageBag([
                                "password"=> [
                                    "抱歉服务器正在维护，现在暂停注册服务！"
                                ]

                            ]);
                            return \Illuminate\Support\Facades\Redirect::route("user/SignIn")
                                ->withInput($data);
                        }



                    }

                    else
                    {
                        $messages = $validator->messages();
                        //echo "Invalide match!";
                        $data["errors"]=$messages;

                        $data["username"]=Input::get("username");

                        return \Illuminate\Support\Facades\Redirect::route("user/SignIn")
                            ->withInput($data);


                    }

                }
                return View::make("user/SignIn",$data);
    }

    function myProfileAction(){

        $posts = Post::orderBy('id','desc')->paginate(10);


        return View::make("user/myprofile")->nest('blog','blog.index',compact('posts'));

    }
    function updateProfileAction(){

        return View::make("user/updateprofile");
    }





}
