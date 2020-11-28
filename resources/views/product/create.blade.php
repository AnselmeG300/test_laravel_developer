<x-app-layout>
    <head>
        <!-- Bootstrap core CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/display.css" />
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fill in the product information') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12 offset-xl-2 offset-lg-1 offset-md-1 offset-sm-0 offset-0">
                    <div class="card ">  
                        <form method="POST" action="{{ route('products.store') }}" autocomplete="off" class="form-horizontal"  enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="card-body">
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
                                <!-- Picture -->
                                {!! App\Helpers\ImageHelper::createImage() !!}
                                <!-- Name -->
                                <div class="form-group">
                                    <label class="col-form-label" for="name"> Name </label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" type="text" required />
                                    @error('name')
                                        <small class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <!-- Price -->
                                <div class="form-group">
                                    <label class="col-form-label" for="price"> Price </label>
                                    <input class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" id="price" type="number" required />
                                    @error('price')
                                        <small class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <!-- Description -->
                                <div class="form-group">
                                    <label class="col-form-label" for="description"> Description </label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"  id="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <small class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-md" type="submit"> Save </button>
                                    <button class="btn btn-secondary btn-md" type="reset"> Cancel </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{ asset('js/uploadImage.js') }}"></script>
</x-app-layout>
