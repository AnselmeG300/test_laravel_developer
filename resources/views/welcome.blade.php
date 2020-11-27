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
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

			<!-- Favicons -->
		<link rel="apple-touch-icon" href="{{asset('img/market_icon.png')}}" sizes="180x180">
		<link rel="icon" href="{{asset('img/market_icon.png')}}" sizes="32x32" type="image/png">
		<link rel="icon" href="{{asset('img/market_icon.png')}}" sizes="16x16" type="image/png">
		<link rel="mask-icon" href="{{asset('img/market_icon.png')}}" color="#563d7c">
		<link rel="icon" href="{{asset('img/market_icon.png')}}">
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
			<div class="navbar navbar-expand-lg navbar-dark bg-dark">
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

  <section class="jumbotron text-center">
	<div class="container">
	  <h1>List of products</h1>
	  <p class="lead text-muted">Find all the sold products.</p>
	</div>
  </section>

  <div class="album py-5 bg-light">
	<div class="container">

	  <div class="row">
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
			<div class="card-body">
			  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  	<div class="text-right">
                    <strong class="text-right" style="font-weight: bold; font-size: 1.5em;">9 FCFA</strong>
			    </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
	<p class="float-right">
	  <a href="#">Back to top</a>
	</p>
	<p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
	<p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
</html>
