<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/6
 * Time: 上午11:37
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