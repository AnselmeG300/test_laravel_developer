
	<head>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

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

<main role="main">
	@if(!(auth()->user()->products->isEmpty()))
  	<div class="album py-5 bg-light">
		<div class="row">
			@foreach(auth()->user()->products as $product)
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						<img class="img img-responsive" src="{{ asset($product->picture) }}" alt="your image" />
						<div class="card-body">
						<p class="card-text">{{ $product->description }}</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
								</div>
								<small class="text-muted">{{ $product->price }} FCFA</small>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
 	</div>
	@else
		<div>
			<h1><strong style="font-weight: bold;"> {{auth()->user()->name }}</strong> you have no registered products.'</h1>
		</div>
	@endif
</main>




