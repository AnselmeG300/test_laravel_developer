<x-app-layout>
    <head>
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
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Products') }}
        </h2>
    </x-slot>
    <div>      
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <main role="main">
                @if (session('status'))
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status') }}</span>
                        </div>
                        </div>
                    </div>
                @endif
                @if(!(auth()->user()->products->isEmpty()))
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            @foreach(auth()->user()->products as $product)
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm" style="border-radius: 10%;">
                                        <img class="img img-responsive" style="height: 250px;  border-radius: 10% 10% 0% 0% ;"  src="{{ asset($product->picture) }}" alt="your image" />
                                        <div class="card-body">
                                        <p class="card-text">{{ $product->description }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a  class="btn btn-sm btn-outline-primary" href="{{ route('products.edit', $product) }}"  >Edit</a>
                                                </div>
                                                <small class="text-muted">{{ $product->price }} FCFA</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @else
                    <div>
                        <h1><strong style="font-weight: bold;"> {{auth()->user()->name }}</strong> you have no registered products.'</h1>
                    </div>
                @endif
            </main>
        </div>
    </div>
</x-app-layout>
