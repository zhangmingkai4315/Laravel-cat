<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/6
 * Time: 上午11:52
 */
Form::macro("field",function($options)
{   $markup="";
    $type="text";
    if(!empty($options["type"])){
        $type=$options["type"];
    }
    if(empty($options["type"])){
       return ;
    }

    $name=$options["name"];
    $label="";
    if(!empty($options["label"])){
        $label=$options["label"];
    }
    $value=\Illuminate\Support\Facades\Input::old($name);
    if(!empty($options["$value"])){
        $value=\Illuminate\Support\Facades\Input::old($name,$options["value"]);
    }
    $placeholder="";
    if(!empty($options["placeholder"]))
    {
        $placeholder=$options["placeholder"];
    }
    $class="";
    if(!empty($options["class"]))
    {
        $class=" ".$options["class"];
    }
    $parameters=[
        "class"=>"form-control".$class,
        "placeholder"=> $placeholder
    ];
    $error="";
    if(!empty($options["form"])){
        $error=$options["form"]->getError($name);

    }
    if($type!="hidden")
    {
        $markup.="<div class='form-group";
        $markup.=($error ? "has-error ":"");
        $markup.="'>";
    }
    switch($type)
    {
        case "text":
            $markup.=Form::label($name,$label,[
                "class"=>"control-label"
            ]);
            $markup.=Form::text($name,$value,$parameters);
            break;
        case "password":
            $markup.=Form::label($name,$label,[
                "class"=>"control-label"
            ]);
            $markup.=Form::password($name,$parameters);
            break;
        case "checkbox":
            $markup.="<div class='checkbox>";
            $markup.="<label>";
            $markup.=Form::checkbox($name,1,!!$parameters);
            $markup.=" ".$label;
            $markup.="</div>";
            break;

        case "hidden":
        {
            $markup.=Form::hidden($name,$value);
            break;
        }


    }
    if($error){
        $markup.="<span class='help-block'>";
        $markup.=$error;
        $markup.="</span>";

    }
    if($type!=="hidden")
    {
        $markup.="</div>";

    }
    return $markup;


});

