<?php

class petController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    public function showInfo(){

        $user=UserInformation::where('username','=',Auth::user()->username)->firstOrFail();


        $region=$user->region;
        $city=$user->city;
        $community=$user->community;

        $petInfo=$user->PetInfo->first();

        $pet=$petInfo->petName;

        $petType=$petInfo->petType;
        $petPinzhong=$petInfo->petPinzhong;

        $petAge=$petInfo->petAge;
        if(!isset($pet)||!isset($petType)||!isset($petAge))
        {
            return \Illuminate\Support\Facades\Redirect::Route('pet/updateInfo');
        }
        $data=[
            'region'=>$region,
            'city'=>$city,
            'community'=>$community,
            'pet'=>$pet,
            'petAge'=>$petAge,
            'petType'=>$petType,
            'petPinzhong'=>$petPinzhong

        ];
        return View::make('pet.info',$data);


}


}
