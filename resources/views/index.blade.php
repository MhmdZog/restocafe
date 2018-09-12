@extends('main')
@section('content')
<div id="wrapper" class="home-page">
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand" href="{{route('index')}}"><i class="icon-info-blocks material-icons">location_on</i>GRILL</a> </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="waves-effect waves-dark" href="{{route('index')}}">Home</a></li>

                        <li><a class="waves-effect waves-dark" href="{{route('services')}}">Services</a></li>
                        <li><a class="waves-effect waves-dark" href="{{route('portfolio')}}">Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="{{route('pricing')}}">Pricing</a></li>
                        <li><a class="waves-effect waves-dark" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
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
                    <div class="about-text">
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
                    <div class="about-image"> <img src="img/about.jpg" alt="about Images">



                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
