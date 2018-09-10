<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grill Multi purpose HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" /> <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" /> <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->
</head>

<body>
    <div id="wrapper" class="home-page"> {{-- @yield('content') --}}
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">                                <span class="icon-bar"></span>                                <span class="icon-bar"></span>                                <span class="icon-bar"></span>                            </button>
                        <a class="navbar-brand" href="{{route('index')}}"><i class="icon-info-blocks material-icons">location_on</i>GRILL</a> </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class="waves-effect waves-dark" href="{{route('index')}}">Home</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('about')}}">about Us </a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('services')}}">Services</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('portfolio')}}">Gallery</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('pricing')}}">Pricing</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header> <!-- end header -->
        <section id="banner">
            <!-- Slider -->
            <div id="main-slider" class="flexslider">
                <ul class="slides">
                    <li> <img src="img/slides/1.jpg" alt="" />
                        <div class="flex-caption"> <h3>Best BBQ!</h3>
                            <p>Get the best Tasty Food</p>
                        </div>
                    </li>
                    <li> <img src="img/slides/2.jpg" alt="" />
                        <div class="flex-caption"> <h3>Sea GRILL</h3>
                            <p>Get all types of Sea Food</p>
                        </div>
                    </li>
                </ul>
            </div> <!-- end slider -->
        </section>
        <section class="dishes">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aligncenter"><h2 class="aligncenter">Signature Dishes</h2>
                        </div> <br/>







        			</div>
                </div>
                <div class="row service-v1 margin-bottom-40">
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image"> <img class="img-responsive" src="img/service1.jpg" alt=""> <span class="card-title">Cobb Salad</span> </div>
                            <div class="card-content">
                                <p> </p>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image"> <img class="img-responsive" src="img/service2.jpg" alt=""> <span class="card-title">Twinkies</span> </div>
                            <div class="card-content">
                                <p> </p>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image"> <img class="img-responsive" src="img/service3.jpg" alt=""> <span class="card-title">Pot roast</span> </div>
                            <div class="card-content">
                                <p> </p>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container">
                <section class="services">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aligncenter"><h2 class="aligncenter">We Offer</h2>
                            </div> <br/>







        			</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks material-icons">track_changes</i>
                            <div class="info-blocks-in"> <h3>Coffee</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks material-icons">settings_input_svideo</i>
                            <div class="info-blocks-in"> <h3>Breakfast</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks material-icons">queue_music</i>
                            <div class="info-blocks-in"> <h3>Lunch</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks material-icons">my_location</i>
                            <div class="info-blocks-in"> <h3>Dinner</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks material-icons">shuffle</i>
                            <div class="info-blocks-in"> <h3>Parties</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks material-icons">tab_unselected</i>
                            <div class="info-blocks-in"> <h3>Events</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center"> <h2>Our Restaurant</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="{{route('about')}}-text">
                            <p></p>
                            <ul class="withArrow">
                                <li><span class="fa fa-angle-right"></span></li>
                                <li><span class="fa fa-angle-right"></span> </li>
                                <li><span class="fa fa-angle-right"></span> </li>
                                <li><span class="fa fa-angle-right"></span></li>
                            </ul> <a href="#" class="btn btn-primary waves-effect waves-dark">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="{{route('about')}}-image"> <img src="img/{{route('about')}}.jpg" alt="{{route('about')}} Images">        					</div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="widget"> <h5 class="widgetheading">Our Contact</h5> <address>					<strong></strong></address>
                            <p> <i class="icon-phone"></i>+961-70905671<br> <i class="icon-envelope-alt"></i>mohamad.alzoghbi
                                @hotmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p> <span>&copy; 2018 All right reserved.  By </span><a href="" target="_blank">Mohamad Al-Zoghbi</a> </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="social-network">
                                <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div> <a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a> <!-- javascript    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script> <!-- Vendor Scripts -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
