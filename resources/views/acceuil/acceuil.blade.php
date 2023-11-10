<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{asset('parfait/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{asset('parfait/css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('parfait/css/style.css')}}" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		@include('acceuil.header')

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					@foreach($product as $prod)

					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="{{asset('product/'.$prod->image)}}" class="img-fluid product-thumbnail">
							<h3 class="product-title"> {{$prod->title}} </h3>
							<strong class="product-price"> {{$prod->price}} € </strong>

							<span class="icon-cross">
								<img src="{{asset('parfait/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>

					@endforeach
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		@include('acceuil.why')

		@include('acceuil.wehelp')


		<!-- Start Popular Product -->
		
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		
		<!-- End Blog Section -->	

		@include('acceuil.footer')


		<script src="{{asset('parfait/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('parfait/js/tiny-slider.js')}}"></script>
		<script src="{{asset('parfait/js/custom.js')}}"></script>
	</body>

</html>
