<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@section('title') Shopper @show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]>
    <meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
@section('css')
    <!-- bootstrap -->
        <link href="/css/libs/bootstrap.min.css" rel="stylesheet">
        <link href="/css/libs/bootstrap-responsive.min.css" rel="stylesheet">

        <link href="/css/themes/bootstrappage.css" rel="stylesheet"/>

        <!-- global styles -->
        <link href="/css/themes/flexslider.css" rel="stylesheet"/>
        <link href="/css/themes/main.css" rel="stylesheet"/>
@show

@section('head-js')
    <!-- scripts -->
        <script src="/js/themes/jquery-1.7.2.min.js"></script>
        <script src="/js/libs/bootstrap.min.js"></script>
        <script src="/js/themes/superfish.js"></script>
        <script src="/js/themes/jquery.scrolltotop.js"></script>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="/js/respond.min.js"></script>
        <![endif]-->
    @show

</head>
<body>
@section('user-navbar')
    <div id="top-bar" class="container">
        <div class="row">
            <div class="span4">
                <form method="POST" class="search_form">
                    <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
                </form>
            </div>
            <div class="span8">
                <div class="account pull-right">
                    <ul class="user-menu">
                        @if(Auth::check())
                            <li><a href="/profile">My Account</a></li>
                            <li><a href="/history">Order History</a></li>
                            <li><a href="/wishlist">Wish List</a></li>
                            <li><a href="/cart">Your Cart</a></li>
                            <li><a href="/checkout">Checkout</a></li>
                            <li><a href="/logout">Logout</a></li>
                        @else
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@show

<div id="wrapper" class="container">
    @section('item-navbar')
        <section class="navbar main-menu">
            <div class="navbar-inner main-menu">
                <a href="/" class="logo pull-left"><img src="img/app/logo.png" class="site_logo" alt=""></a>
                <nav id="menu" class="pull-right">
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="/{{ $category->path }}">{{ $category->title }}</a>
                                <ul>
                                    @foreach($category->children() as $subcategory)
                                        <li>
                                            <a href="/{{ $category->path }}/{{ $subcategory->path }}">{{ $subcategory->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </section>
    @show

    @yield('main')

    @yield('homepage-slider')

    @yield('featured-items')

    @yield('latest-items')

    @yield('features')

    @section('footer')
        <section id="footer-bar">
            <div class="row">
                <div class="span3">
                    <h4>Navigation</h4>
                    <ul class="nav">
                        <li><a href="/">Homepage</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/cart">Your Cart</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>
                <div class="span5">
                    <p class="logo"><img src="/img/app/logo.png" class="site_logo" alt=""></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the Lorem Ipsum has
                        been
                        the industry's standard dummy text ever since the you.</p>
                    <br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
                </div>
            </div>
        </section>
    @show

    @section('copyrights')
        <section id="copyright">
            <span>Copyright 2013 bootstrappage template  All right reserved.</span>
        </section>
    @show
</div>

@section('footer-scripts')
    <script src="/js/themes/common.js"></script>
    <script src="/js/themes/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).ready(function () {
                $('.flexslider').flexslider({
                    animation: "fade",
                    slideshowSpeed: 4000,
                    animationSpeed: 600,
                    controlNav: false,
                    directionNav: true,
                    controlsContainer: ".flex-container" // the container that holds the flexslider
                });
            });
        });
    </script>
@show
</body>
</html>