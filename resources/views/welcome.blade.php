<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v4.1.1">
		<title>Market</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

		<!-- Bootstrap core CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

		<link href="{{asset('css/carousel.css')}}" rel="stylesheet">

		<meta name="theme-color" content="#563d7c">
		<style>
		  .bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		  }

		  @media (min-width: 768px) {
			.bd-placeholder-img-lg {
			  font-size: 3.5rem;
			}
		  }
		</style>
		<!-- Custom styles for this template -->
		<link href="{{asset('css/album.css')}}" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="navbar navbar-expand-lg navbar-dark bg-danger">
				<div class="container d-flex justify-content-between">
					<a href="#" class="navbar-brand d-flex align-items-center">
						<strong>Market</strong>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarHeader">
						<ul class="navbar-nav mr-auto">
							 <li class="nav-item {{ Route::currentRouteName() == 'welcome' ? ' active' : '' }}">
								<a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item }}">
								<a class="nav-link" href="{{ route('products.create') }}">Post Product<span class="sr-only">(current)</span></a>
							</li>
						  	@auth
							 	<li class="nav-item ">
									<a class="nav-link" href="{{ route('dashboard') }}">My Products<span class="sr-only">(current)</span></a>
							  	</li>
							 	<li class="nav-item">
									<a class="nav-link" href="{{ route('profile.show') }}">Account<span class="sr-only">(current)</span></a>
							  	</li>	
								<li class="nav-item">
									<form method="POST" action="{{ route('logout') }}">
										@csrf
										<a class="nav-link" href="{{ route('logout') }}"
													onclick="event.preventDefault();
																this.closest('form').submit();">Logout<span class="sr-only">(current)</span></a>
									</form>
								</li>
							@else
								<li class="nav-item }}">
									<a class="nav-link" href="{{ route('login') }}">Login<span class="sr-only">(current)</span></a>
								</li>
								@if (Route::has('register'))
									<li class="nav-item }}">
										<a class="nav-link" href="{{ route('register') }}">Register<span class="sr-only">(current)</span></a>
									</li>
								@endif
							@endauth
						</ul>
					</div>
				</div>
				
			</div>
		</header>

<main role="main">

  	<section>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="first-slide img img-responsive" src="{{asset('img/publicities/bioromance.jpg')}}" alt="First slide">
				<div class="container">
				<div class="carousel-caption text-left">
					<h1>Best product of the day: BIOPHARMA Bioromance</h1>
					<p>Promote your products ;) .</p>
					<p><a class="btn btn-lg btn-primary" href="{{ route('products.create') }}" role="button">Post product today</a></p>
				</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="second-slide img img-responsive" src="{{asset('img/publicities/NiveaCare.jpg')}}" alt="Second slide">
				<div class="container">
				<div class="carousel-caption text-black">
					<h1>Publicity: Nivea Care</h1>
					<p>Go further ..., opt for the premium option so that your products are always at the forefront.  .</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p></FONT>
				</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="third-slide img img-responsive" src="{{asset('img/publicities/fruits.jpg')}}" alt="Third slide">
				<div class="container">
				<div class="carousel-caption text-right">
					<h1>Competitor.</h1>
					<p>Also look at competing products in order to optimize your prices.</p>
					<p><a class="btn btn-lg btn-primary" href="#products" role="button">Browse gallery</a></p>
				</div>
				</div>
			</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
  </section>

  <div class="album py-5 bg-light" id="products">
	<div class="container">
	  	<div class="row">
		  	@if(!empty(App\Models\Product::all()) && count(App\Models\Product::all()) != 0)
				@foreach(App\Models\Product::all() as $product)
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm" style="border-radius: 5%;">
						<img class="img img-responsive" style="height: 250px; border-radius: 5% 5% 0% 0%;"  src="{{ asset($product->picture) }}" alt="your image" />
						<div class="card-body">
							<p class="card-text"  data-toggle="tooltip" title="@if(strlen($product->description) > 35) {{ $product->description }} @endif">
								@if (strlen($product->description) > 35)
										{{ substr($product->description, 0, 35).' ...' }}
								@else
									{{ $product->description }}
								@endif
							</p>
							<div class="text-right">
								<strong class="text-right" style="font-weight: bold; font-size: 1.5em;">{{ number_format($product->price, 0, '',' ') }} FCFA</strong>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			@else
		  		<h1> No products posted for the moment. <a href="{{ route('products.create') }}"><strong style="font-weight: bold;"> Click here to post! </strong></a></h1>
			@endif
	  	</div>
	</div>
  </div>

</main>

<footer class="text-muted bg-danger">
  	<div class="container">
		<p class="float-right">
		<a href="#">Back to top</a>
		</p>
	</div>
</footer>
<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{asset('js/holder.min.js')}}" ></script>
</body>
</html>
