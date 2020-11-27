<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fill in the product information') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12 offset-xl-2 offset-lg-1 offset-md-1 offset-sm-0 offset-0">
                    <div class="card ">  
                        <form method="POST" action="{{ route('products.store') }}">
                            @csrf
                            @method('post')
                            <div class="card-body">
                                <!-- Picture -->
                                {!! $createImage() !!}
                                <!-- Name -->
                                <div class="form-group">
                                    <label class="col-form-label" for="name"> Name </label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ? old('name') : $product->name }}" id="name" type="text" required />
                                    @error('name')
                                        <small class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <!-- Price -->
                                <div class="form-group">
                                    <label class="col-form-label" for="price"> Price </label>
                                    <input class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') ? old('price') : $product->price }}" id="price" type="number" required />
                                    @error('price')
                                        <small class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <!-- Description -->
                                <div class="form-group">
                                    <label class="col-form-label" for="description"> Description </label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"  id="description" >{{ old('description') ? old('description') : $product->description }}</textarea>
                                    @error('description')
                                        <small class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-md" type="submit"> Update </button>
                                    <button class="btn btn-secondary btn-md" type="reset"> Reset </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
