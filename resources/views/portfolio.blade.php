@extends('welcome')@section('content')<div  id="wrapper">
<!-- start header -->
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">                            <span class="icon-bar"></span>                            <span class="icon-bar"></span>                            <span class="icon-bar"></span>                        </button>
                <a class="navbar-brand" href="index.html"><i class="icon-info-blocks material-icons">location_on</i>Grill</a> </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a class="waves-effect waves-dark" href="index.html">Home</a></li>
                    <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="about.html">Company</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Our Team</a></li>
                            <li><a class="waves-effect waves-dark" href="#">News</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Investors</a></li>
                        </ul>
                    </li>
                    <li><a class="waves-effect waves-dark" href="services.html">Services</a></li>
                    <li class="active"><a href="portfolio.html" class="waves-effect waves-dark" >Gallery</a></li>
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
            <div class="col-lg-12"> <h2 class="pageTitle">Portfolio</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-logo"> <h3>Our <span class="color">Gallery</span></h3>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                        ipsam voluptatem quia voluptas</p>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                        ipsam voluptatem quia voluptas</p>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Start Gallery 1-2 -->
<section id="gallery-1" class="content-block section-wrapper gallery-1">
    <div class="container">
        <div class="editContent">
            <ul class="filter">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <li><a class="waves-effect waves-dark" href="#" data-filter=".artwork">Artwork</a></li>
                <li><a class="waves-effect waves-dark" href="#" data-filter=".creative">Creative</a></li>
                <li><a class="waves-effect waves-dark" href="#" data-filter=".nature">Nature</a></li>
                <li><a class="waves-effect waves-dark" href="#" data-filter=".outside">Outside</a></li>
                <li><a class="waves-effect waves-dark" href="#" data-filter=".photography">Photography</a></li>
            </ul>
        </div> <!-- /.gallery-filter -->
        <div class="row">
            <div id="isotope-gallery-container">
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                    <div class="gallery-item">
                        <div class="gallery-thumb"> <img src="img/works/1.jpg" class="img-responsive" alt="1st gallery Thumb">
                            <div class="image-overlay"></div> <a href="img/works/1.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="gallery-details">
                            <div class="editContent"> <h5>1st gallery Item</h5>
                            </div>
                            <div class="editContent">
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.gallery-item-wrapper -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                    <div class="gallery-item">
                        <div class="gallery-thumb"> <img src="img/works/2.jpg" class="img-responsive" alt="2nd gallery Thumb">
                            <div class="image-overlay"></div> <a href="img/works/2.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="gallery-details">
                            <div class="editContent"> <h5>2nd gallery Item</h5>
                            </div>
                            <div class="editContent">
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.gallery-item-wrapper -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
                    <div class="gallery-item">
                        <div class="gallery-thumb"> <img src="img/works/3.jpg" class="img-responsive" alt="3rd gallery Thumb">
                            <div class="image-overlay"></div> <a href="img/works/3.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="gallery-details">
                            <div class="editContent"> <h5>3rd gallery Item</h5>
                            </div>
                            <div class="editContent">
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.gallery-item-wrapper -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper creative nature">
                    <div class="gallery-item">
                        <div class="gallery-thumb"> <img src="img/works/4.jpg" class="img-responsive" alt="4th gallery Thumb">
                            <div class="image-overlay"></div> <a href="img/works/4.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="gallery-details">
                            <div class="editContent"> <h5>4th gallery Item</h5>
                            </div>
                            <div class="editContent">
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.gallery-item-wrapper -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                    <div class="gallery-item">
                        <div class="gallery-thumb"> <img src="img/works/5.jpg" class="img-responsive" alt="5th gallery Thumb">
                            <div class="image-overlay"></div> <a href="img/works/5.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="gallery-details">
                            <div class="editContent"> <h5>5th gallery Item</h5>
                            </div>
                            <div class="editContent">
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.gallery-item-wrapper -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                    <div class="gallery-item">
                        <div class="gallery-thumb"> <img src="img/works/6.jpg" class="img-responsive" alt="6th gallery Thumb">
                            <div class="image-overlay"></div> <a href="img/works/6.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="gallery-details">
                            <div class="editContent"> <h5>6th gallery Item</h5>
                            </div>
                            <div class="editContent">
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.isotope-gallery-container -->
        </div> <!-- /.row -->
        <!-- /.container -->
    </div>
</section>
<!--// End Gallery 1-2 -->
</div>
@endsection
