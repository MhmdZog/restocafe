@extends('welcome')
@section('content')
<div id="wrapper">
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <a class="navbar-brand" href="index.html"><i class="icon-info-blocks material-icons">location_on</i>Grill</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="index.html">Home</a></li>
                        <li class="dropdown active">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="about.html">Company</a></li>
                                <li><a class="waves-effect waves-dark" href="#">Our Team</a></li>
                                <li><a class="waves-effect waves-dark" href="#">News</a></li>
                                <li><a class="waves-effect waves-dark" href="#">Investors</a></li>
                            </ul>
                        </li>
                        <li><a class="waves-effect waves-dark" href="services.html">Services</a></li>
                        <li><a class="waves-effect waves-dark" href="portfolio.html">Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="pricing.html">Pricing</a></li>
                        <li><a class="waves-effect waves-dark" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!-- end header -->
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">About Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <section class="section-padding">
            <div class="container">
                <div class="row showcase-section">
                    <div class="col-md-6">
                        <img src="img/dev1.png" alt="showcase image">

    				</div>
                    <div class="col-md-6">
                        <div class="about-text">
                            <h3>Our <span class="color">Company</span></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="about">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Heading and para -->
                        <div class="block-heading-two">
                            <h3><span>Why Choose Us?</span></h3>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="about home-about">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
