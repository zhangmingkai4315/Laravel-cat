@extends("layout")
@section("content")
<div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-4">

                {{
                    Form::open(
                    [   "class"=>"form-horizontal",
                          "role"=>"form",
                          "url"=>URL::route("user/reset").$token,
                         "autocomplete"=>"off"
                    ]
                    )
                }}

                @if (Session::has('error'))
                {{ trans(Session::get('reason')) }}
                @endif
                @if($error=$errors->first("token"))
                <div class="error">
                   {{$error}}
                </div>
                @endif

                <div class="form-group">
                    {{Form::label("email","Email")}}
                    {{Form::text("email",Input::get("email"),
                                ["placeholder"=>"重置使用的邮箱账号",
                                "class"=>"form-control"
                                ]
                    )}}
                    @if($error=$errors->first("email"))
                    <div class="error">
                     {{$error}}
                    </div>
                    @endif
                </div>
                 <div class="form-group">
                    {{Form::label("password","重置密码")}}
                      {{Form::password("password",[
                        "placeholder"=>"重置密码",
                           "class"=>"form-control"
                       ])}}
                        @if($error=$errors->first("password"))
                        <div class="error">
                        {{$error}}
                        </div>
                        @endif
                 </div>
                 <div class="form-group">
                        {{Form::label("password_confirmation","确认密码")}}
                        {{Form::password("password_confirmation",[
                        "placeholder"=>"确认重置密码","class"=>"form-control"
                        ])}}
                        @if($error=$errors->first("password_confirmation"))
                        <div class="error">
                       {{$error}}
                        </div>
                        @endif
                 </div>
                 <div class="form-group">
                        {{Form::submit("密码重置",["class"=>"btn btn-primary btn-block"])}}
                        {{Form::close()}}
                 </div>
            </div>
        </div>
</div>
