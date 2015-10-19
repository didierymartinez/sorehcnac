<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script>

            jQuery(document).ready(function($) {

                /* ======= Scrollspy ======= */
                $('body').scrollspy({ target: '#top', offset: 400});

                /* ======= ScrollTo ======= */
                $('a.scrollto').on('click', function(e){

                    //store hash
                    var target = this.hash;

                    e.preventDefault();

                    $('body').scrollTo(target, 800, {offset: -80, 'axis':'y', easing:'easeOutQuad'});
                    //Collapse mobile menu after clicking
                    if ($('.navbar-collapse').hasClass('in')){
                        $('.navbar-collapse').removeClass('in').addClass('collapse');
                    }

                });

                /* ======= Flexslider ======= */
                $('.flexslider').flexslider({
                    animation: "fade",
                    touch: true,
                    directionNav: false
                });

                /* ======= jQuery Placeholder ======= */
                $('input, textarea').placeholder();

                /* ======= jQuery FitVids - Responsive Video ======= */
                $("#video-container").fitVids();

                /* ======= jQuery Responsive equal heights plugin ======= */
                /* Ref: https://github.com/liabru/jquery-match-height */

                $('#testimonials .quote-box').matchHeight();

                /* ======= Style Switcher (Remove on production site) ======= */
                $('#config-trigger').on('click', function(e) {
                    var $panel = $('#config-panel');
                    var panelVisible = $('#config-panel').is(':visible');
                    if (panelVisible) {
                        $panel.hide();
                    } else {
                        $panel.show();
                    }
                    e.preventDefault();
                });

                $('#config-close').on('click', function(e) {
                    e.preventDefault();
                    $('#config-panel').hide();
                });


                $('#color-options a').on('click', function(e) {
                    var $styleSheet = $(this).attr('data-style');
                    var $logoImage = $(this).attr('data-logo');
                    $('#theme-style').attr('href', $styleSheet);
                    $('#logo-image').attr('src', $logoImage);

                    var $listItem = $(this).closest('li');
                    $listItem.addClass('active');
                    $listItem.siblings().removeClass('active');

                    e.preventDefault();

                });



            });
        </script>
        <style>
            body,html{
                height: 100%;
            }

            nav.sidebar, .main{
                -webkit-transition: margin 200ms ease-out;
                -moz-transition: margin 200ms ease-out;
                -o-transition: margin 200ms ease-out;
                transition: margin 200ms ease-out;
            }

            .main{
                padding: 10px 10px 0 10px;
            }

            @media (min-width: 765px) {



                .main{
                    position: absolute;
                    width: calc(100% - 40px);
                    margin-left: 40px;
                    float: right;
                }

                nav.sidebar:hover + .main{
                    margin-left: 200px;
                }

                nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
                    margin-left: 0px;
                }

                nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
                    text-align: center;
                    width: 100%;
                    margin-left: 0px;
                }

                nav.sidebar a{
                    padding-right: 13px;
                }

                nav.sidebar .navbar-nav > li:first-child{
                    border-top: 1px #e5e5e5 solid;
                }

                nav.sidebar .navbar-nav > li{
                    border-bottom: 1px #e5e5e5 solid;
                }

                nav.sidebar .navbar-nav .open .dropdown-menu {
                    position: static;
                    float: none;
                    width: auto;
                    margin-top: 0;
                    background-color: transparent;
                    border: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }

                nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
                    padding: 0 0px 0 0px;
                }

                .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                    color: #777;
                }

                nav.sidebar{
                    width: 200px;
                    height: 100%;
                    margin-left: -160px;
                    float: left;
                    margin-bottom: 0px;
                }

                nav.sidebar li {
                    width: 100%;
                }

                nav.sidebar:hover{
                    margin-left: 0px;
                }

                .forAnimate{
                    opacity: 0;
                }
            }

            @media (min-width: 1330px) {

                .main{
                    width: calc(100% - 200px);
                    margin-left: 200px;
                }

                nav.sidebar{
                    margin-left: 0px;
                    float: left;
                }

                nav.sidebar .forAnimate{
                    opacity: 1;
                }
            }

            nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
                color: #CCC;
                background-color: transparent;
            }

            nav:hover .forAnimate{
                opacity: 1;
            }
            section{
                padding-left: 15px;
            }


            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body  data-spy="scroll">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=232000390243356";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <nav style="position: fixed" class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                    <li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
                    <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container">
            <div class="content">

                <!-- Jumbotron -->
                <div class="jumbotron">
                    <h1>Cancheros</h1>
                    <p class="lead">Expertos del Futbol Aficionado!!!!</p>
                    <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>

                </div>

                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-lg-4">
                        <h2>Safari bug warning!</h2>
                        <p class="text-danger">As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                        <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                    </div>
                </div>

                <!-- Site footer -->
                <footer class="footer">
                    <p>&copy; Company 2014</p>
                </footer>
            </div>
        </div>



    </body>
</html>
