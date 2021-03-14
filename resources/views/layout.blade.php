<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Veridical
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131203

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel Project</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

    <link href="/css/default.css" rel="stylesheet"/>
    <link href="/css/fonts.css" rel="stylesheet"/>


</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="menu">
                <ul>
                    <li class="{{ Request::is('/') ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="{{ Request::is('about') ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">About Me</a></li>
                    <li class="{{ Request::is('users') ? 'current_page_item' : '' }}"><a href="/users" accesskey="2" title="">Users</a></li>
                    <li class="{{ Request::is('posts') ? 'current_page_item' : '' }}"><a href="/posts" accesskey="5" title="">Posts</a></li>
                    <li class="{{ Request::is('login') ? 'current_page_item' : '' }}"><a href="/login" accesskey="1" title="">Login</a></li>
                </ul>
            </div>
        </div>
        <div id="logo">
            <h1><a href="/">Laravel Project</a></h1>
        </div>
    </div>

    @yield('content')

    <div id="copyright">
        <div class="title">
            <h2>Get in touch</h2>
            <span class="byline">Phasellus nec erat sit amet nibh pellentesque congue</span>
        </div>
        <ul class="contact">
            <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
            <li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
            <li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
            <li><a href="#" class="icon icon-github"><span>Github</span></a></li>
        </ul>
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>
</html>

