<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/4
*/
use Illuminate\Support\MessageBag;
class BaseForm {
    protected $passes;
    protected $errors;
    public function __construct(){
        $errors=new MessageBag();
        if($old=\Illuminate\Support\Facades\Input::old("errors"));
        {
            $errors=$old;
            $this->errors=$errors;
        }
    }

    public function isValid($rules){
        $validator=\Illuminate\Support\Facades\Validator::make(\Illuminate\Support\Facades\Input::all(),$rules);
        $this->passes=$validator->passes();
        $this->errors=$validator->errors();
        return $this->passes;
    }
    public function setErrors(MessageBag $error)
    {   $this->errors=$error;
        return $this;
    }
    public function getErrors(){
        return $this->errors;
    }
    public function hasErrors(){
        return $this->errors->any();
    }
    public function gerError($key)
    {
        return $this->gerErrors()->first($key);
    }
    public function isPosted(){
        return \Illuminate\Support\Facades\Input::server("REQUEST_METHOD")=="POST";
    }

}


class GroupForm extends BaseForm{
    public function isValidForAdd(){
        return $this->isValid([
            "name"=>"required"
        ]);
    }
    public function isValidForEdit(){
        return $this->isValid([
            "id"=>"exists:group,id",
            "name"=>"required"
        ]);
    }
    public function isValidForDelete(){
        return $this->isValid([
            "id"=>"exists:group,id"
        ]);
    }

}

class GroupController extends \Illuminate\Routing\Controller
{
    public function indexAction(){
        return \Illuminate\Support\Facades\View::make("group/index",[
            "groups"=>Group::all()
        ]);
    }
    public function addAction(){
        $form=new GroupForm();
        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Group::create([
                    "name"=>\Illuminate\Support\Facades\Input::get("name")
                ]);
                return \Illuminate\Support\Facades\Redirect::route("group/index");
            }
            return \Illuminate\Support\Facades\Redirect::route("group/add")->withInput([
                "name"=>\Illuminate\Support\Facades\Input::get("name"),
                "error"=>$form->getErrors()
            ]);

        }
        return View::make("group/add",[
            "form"=>$form
        ]);
    }
}