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
                        <div class="card-body">
                            <form method="POST" action="{{ route('products.update', $product) }}" autocomplete="off" class="form-horizontal"  enctype="multipart/form-data">
                                @csrf
                                @method('put')
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
                                <div class="form-group row">
                                    <div class="file-upload col-12 text-right">
                                        {!! App\Helpers\ImageHelper::editImage() !!}
                                        <div class="image-upload-wrap" style="display:none;">
                                            <input class="file-upload-input" type='file' id="id_file-upload-input" onchange="readURL(this);" accept="image/*" name="currentFile" value="{{  asset( $product->picture )  }}"  />
                                            <div class="drag-text">
                                            </div>
                                        </div>
                                        <input type="text" id="id_oldFile" name="oldFile" value="{{  $product->picture   }}" style="display:none;">
                                        <div class="file-upload-content">
                                            <img class="file-upload-image img img-responsive" name="currentImage" style="height: 250px; width: 400px; border-radius: 10%;" src="{{ asset( $product->picture ) }}"  alt="your image" />
                                        </div>
                                    </div>
                                </div>
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
                            </form>
                            <x-jet-section-border />
                            <div class="form-group text-left">
                                <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#delete">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade modal-mini modal-primary" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-small">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                    </div>
                    <div class="modal-body text-center">
                    <p>Voulez vous effectivement supprimer le produit <strong> {{ $product->name }} </strong> ?</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-link" data-dismiss="modal">Annuler<div class="ripple-container"><div class="ripple-decorator ripple-on ripple-out" style="left: 51.7333px; top: 19px; background-color: rgb(153, 153, 153); transform: scale(12.7916);"></div></div></button>
                            <button type="submit" class="btn btn-danger btn-link">Oui
                            <div class="ripple-container"></div>
                            <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/uploadImage.js') }}"></script>
</x-app-layout>
