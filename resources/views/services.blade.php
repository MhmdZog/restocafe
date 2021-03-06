@extends('main')
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
                    <a class="navbar-brand" href="{{route('index')}}"><i class="icon-info-blocks material-icons">location_on</i>GRILL</a> </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="{{route('index')}}">Home</a></li>
                        {{-- <li  class="active"><a class="waves-effect waves-dark" href="{{route('services')}}">Services</a></li> --}}
                        <li><a class="waves-effect waves-dark" href="{{route('portfolio')}}">Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="{{route('pricing')}}">Pricing</a></li>
                        <li><a class="waves-effect waves-dark" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <h2 class="pageTitle">Services</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container content">
            <!-- Service Blcoks -->
            <div class="row">
                <div class="col-md-12">
                    <div class="about-logo"> <h3>Our Best <span class="color">Services</span></h3>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                            enim
                            ipsam voluptatem quia voluptas</p>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                            enim
                            ipsam voluptatem quia voluptas</p>
                    </div>
                </div>
            </div> <!-- Info Blcoks -->
            <div class="row">
                <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks fa fa-bell-o"></i>
                    <div class="info-blocks-in"> <h3>Awesome Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks fa fa-hdd-o"></i>
                    <div class="info-blocks-in"> <h3>FontAwesome</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                    <div class="info-blocks-in"> <h3>Bootstrap</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
            </div> <!-- End Info Blcoks -->
            <!-- Info Blcoks -->
            <div class="row">
                <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks fa fa-code"></i>
                    <div class="info-blocks-in"> <h3>SEO Ready</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks fa fa-compress"></i>
                    <div class="info-blocks-in"> <h3>Fully Responsive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks"> <i class="icon-info-blocks fa fa-html5"></i>
                    <div class="info-blocks-in"> <h3>CSS3 + HTML5</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
            </div> <!-- End Info Blcoks -->
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image"> <img class="img-responsive" src="img/service1.jpg" alt=""> <span class="card-title">Material Design</span> </div>
                        <div class="card-content">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt </p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image"> <img class="img-responsive" src="img/service2.jpg" alt=""> <span class="card-title">Bootstrap</span> </div>
                        <div class="card-content">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt </p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image"> <img class="img-responsive" src="img/service3.jpg" alt=""> <span class="card-title">HTML5/CSS3</span> </div>
                        <div class="card-content">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt </p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt </p>
                        </div>
                    </div>
                </div>
            </div> <!-- End Service Blcoks -->
        </div>
    </section>
@endsection
