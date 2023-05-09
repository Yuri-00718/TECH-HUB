@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{ asset('css/edit-from.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit-form-styles.css') }}">
<div>
    <div class="container-fluid p-5">
        <div class="col-8 col-md-6 col-lg-4 mx-auto p-4 bg-white border border-success border-2 rounded-3">
            <h4 class="text-uppercase text-center">Edit Product</h4>
            <form method="POST" action="/shop/update/{{$product->id}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input class="form-control @error('product_name') is-invalid @enderror" required id="product_name" name="product_name" type="text" placeholder="Enter product name" value="{{ $product->product_name }}">
                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input class="form-control @error('product_price') is-invalid @enderror" required id="product_price" name="product_price" type="text" placeholder="Enter product price" value="{{ $product->price }}">
                            @error('product_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                <div class="col-sm-12">
                <div class="form-group">
                    <label for="product_for" class="form-label">Product For</label>
                    <input class="form-control @error('product_for') is-invalid @enderror" id="product_for" name="product_for" type="text" placeholder="Enter product for" value="{{ $product->product_for }}">
                    @error('product_for')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                    </div>
                </div>
                <!-- /.row-->
                <div class="form-group">
                    <label for="img" class="form-label">Upload Product Image</label>
                    <div class="row">
                        <div class="col-sm-6 ">
                            <img id="preview-image-before-upload" src="{{asset('/img/'.$product->img)}}" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class="mb-2">
                            <input class="form-control @error('img') is-invalid @enderror" type="file" name="img" value="" id="img">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <button class="btn btn-dark-green">Edit Product</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
