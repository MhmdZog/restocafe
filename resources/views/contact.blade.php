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

					{{-- <li><a class="waves-effect waves-dark" href="{{route('services')}}">Services</a></li> --}}
					<li><a class="waves-effect waves-dark" href="{{route('portfolio')}}">Gallery</a></li>
					<li><a class="waves-effect waves-dark" href="{{route('pricing')}}">Pricing</a></li>
					<li class="active"><a class="waves-effect waves-dark" href="{{route('contact')}}">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="about-logo">
					<h3>Get<span class="color"> in Touch</span></h3>
					<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
						voluptatem quia voluptas</p>
					<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
						voluptatem quia voluptas</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p> </p>
				<!-- Form itself -->
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="input-field">
						<input type="text" name="name" class="form-control"
			   	   id="name" required
			           data-validation-required-message="Please enter your name" />
						<label for="name" class="">   Name </label>
						<p class="help-block"></p>
					</div>
					<div class="input-field">
						<input type="email" class="form-control" id="email" required
			   		   data-validation-required-message="Please enter your email" />
						<label for="name" class="">   Email </label>
					</div>
					<div class="input-field">
						<textarea rows="10" cols="100" required class="form-control materialize-textarea"
                       idation-required-message="Please enter your message" minlength="5"
                       data-validation-minlength-message="Min 5 characters"
                        maxlength="999" style="resize:none"></textarea>
						<label for="name" class="">   Message </label>
					</div>
					<div id="success"> </div> <!-- For success/fail messages -->
					<button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
				 </form>
			</div>
			<div class="col-md-6">
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<div style="overflow:hidden;height:500px;width:600px;">
					<div id="gmap_canvas" style="height:500px;width:600px;"></div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
				</div>
				<script type="text/javascript">
					function init_map() {
						var myOptions = {
							zoom: 14,
							center: new google.maps.LatLng(40.805478, -73.96522499999998),
							mapTypeId: google.maps.MapTypeId.ROADMAP
						};
						map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
						marker = new google.maps.Marker({
							map: map,
							position: new google.maps.LatLng(40.805478, -73.96522499999998)
						});
						infowindow = new google.maps.InfoWindow({
							content: "<b>The Breslin</b><br/>2880 Broadway<br/> New York"
						});
						google.maps.event.addListener(marker, "click", function() {
							infowindow.open(map, marker);
						});
						infowindow.open(map, marker);
					}
					google.maps.event.addDomListener(window, 'load', init_map);
				</script>
			</div>
		</div>
	</div>

</section>

@endsection
