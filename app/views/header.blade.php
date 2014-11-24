@section("header")

<div class="container">
<style>
    .navbar-custom {
        background-color:#229922;
        color:#ffffff;
        border-radius:4px;
    }

    .navbar-custom .navbar-nav > li > a {
        color:#fff;
        padding-left:10px;
        padding-right:10px;
    }
    .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
        color: #ffffff;
        background-color:transparent;
    }

    .navbar-custom .navbar-nav > li > a:hover, .nav > li > a:focus {
        text-decoration: none;
        background-color: #33aa33;
    }

    .navbar-custom .navbar-brand {
        color:#eeeeee;
    }
    .navbar-custom .navbar-toggle {
        background-color:#eeeeee;
    }
    .navbar-custom .icon-bar {
        background-color:#33aa33;
    }

</style>
    <nav class="navbar navbar-custom navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">喵星人网</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">我的主页</a></li>
                <li><a href="#">周边的喵星人</a></li>
                <li><a href="#">喵星人家族</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="搜索喵星人">
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
                <li><a href="/">登录</a></li>
                <li><a href="/SignIn">注册</a></li>
                <li><a href="#"></a></li>
                <?php /*
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">访问<b class="caret"></b></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">登录</a></li>
                        <li><a href="#">注册</a></li>

                    </ul>
                </li>
               */?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>
@show

