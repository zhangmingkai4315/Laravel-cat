@extends("layout")
@section("content")
<div class="container">
<div class="row">
    <h1 style="text-align: center">欢迎注册使用喵星人小站</h1>
    <br>
</div>
<div class="row">
<div class="col-md-4 col-md-offset-1">


<div class="form-group">
    {{
    Form::open(array(
    "class"=>"form-horizontal",
    "role"=>"form",
    "route" => "user/SignIn",
    "autocomplete" => "off"
    ))}}
</div>

<div class="form-group">
    {{ Form::label("username","用户名")}}
    {{ Form::text("username",Input::old("username"),["placeholder"=>"", "class"=>"form-control" ])}}

</div>
<div class="form-group">
    {{ Form::label("email","邮箱")}}
    {{ Form::text("email",Input::old("email"),["placeholder"=>"", "class"=>"form-control" ])}}
</div>
<div class="form-group">
    {{ Form::label("password","密码")}}
    {{ Form::password("password",["placeholder"=>"", "class"=>"form-control"])}}
</div>
<div class="form-group">
    {{ Form::label("password_confirmation","确认密码")}}
    {{ Form::password("password_confirmation",["placeholder"=>"", "class"=>"form-control"])}}
</div>

<div class="form-group">
    {{ Form::submit("注册",["class"=>"btn btn-primary btn-block"])}}

    {{ Form::close()}}
</div>

<?php /*



require 'Zebra_Form.php';

// instantiate a Zebra_Form object
// instantiate a Zebra_Form object
$form = new Zebra_Form('form');

// the label for the "first name" element
$form->add('label', 'label_firstname', 'firstname', 'First name:');

// add the "first name" element
$obj = $form->add('text', 'firstname');

// set rules
$obj->set_rule(array(

    // error messages will be sent to a variable called "error", usable in custom templates
    'required'  =>  array('error', 'First name is required!'),

));

// "last name"
$form->add('label', 'label_lastname', 'lastname', 'Last name:');
$obj = $form->add('text', 'lastname');
$obj->set_rule(array(
    'required' => array('error', 'Last name is required!')
));

// "email"
$form->add('label', 'label_email', 'email', 'Email address:');
$obj = $form->add('text', 'email');
$obj->set_rule(array(
    'required'  => array('error', 'Email is required!'),
    'email'     => array('error', 'Email address seems to be invalid!')
));

// attach a note to the email element
$form->add('note', 'note_email', 'email', 'Please enter a valid email address. An email will be sent to this
    address with a link you need to click on in order to activate your account', array('style'=>'width:200px'));

// "password"
$form->add('label', 'label_password', 'password', 'Choose a password:');
$obj = $form->add('password', 'password');
$obj->set_rule(array(
    'required'  => array('error', 'Password is required!'),
    'length'    => array(6, 10, 'error', 'The password must have between 6 and 10 characters'),
));
$form->add('note', 'note_password', 'password', 'Password must be have between 6 and 10 characters.');

// "confirm password"
$form->add('label', 'label_confirm_password', 'confirm_password', 'Confirm password:');
$obj = $form->add('password', 'confirm_password');
$obj->set_rule(array(
    'compare' => array('password', 'error', 'Password not confirmed correctly!')
));

// "captcha"
$form->add('captcha', 'captcha_image', 'captcha_code');
$form->add('label', 'label_captcha_code', 'captcha_code', 'Are you human?');
$obj = $form->add('text', 'captcha_code');
$form->add('note', 'note_captcha', 'captcha_code', 'You must enter the characters with black color that stand
    out from the other characters', array('style'=>'width: 200px'));
$obj->set_rule(array(
    'required'  => array('error', 'Enter the characters from the image above!'),
    'captcha'   => array('error', 'Characters from image entered incorrectly!')
));

// "submit"
$form->add('submit', 'btnsubmit', 'Submit');

// if the form is valid
if ($form->validate()) {

    // show results
    show_results();

    // otherwise
} else

    // generate output using a custom template
    $form->render();


*/?>


@if($errors->any())
<ul>
    {{implode('',$errors->all('<li class="error">:message</li>'))}}
</ul>
@endif

</div>
<div class="col-md-6 col-md-offset-1">
    <br>
    <br>
    <a href="/">
        <img src="http://t2.qpic.cn/mblogpic/98623f254ea392d76b30/460" width="500px" height="300px" class="shadow" >
    </a>
</div>
</div>
</div>
@stop
