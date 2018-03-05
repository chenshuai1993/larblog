<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'lar blog') - 陈帅博客系统</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="/" id="logo">陈帅博客</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/help">帮助</a></li>
                    <li><a href="/login">登录</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="container">
    @yield('content')
</div>
</body>
</html>