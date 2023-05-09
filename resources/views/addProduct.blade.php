@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/add-form.css') }}">
<div class="container-fluid p-5">
    <div class="col-8 col-md-6 col-lg-4 mx-auto p-4 bg-white border border-success border-2 rounded-3">
        <h4 class="text-uppercase text-center mb-4">Add Product</h4>
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input class="form-control @error('product_name') is-invalid @enderror" required id="product_name" name="product_name" type="text" placeholder="Enter product name" value="{{ old('product_name') }}">
                @error('product_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price</label>
                <input class="form-control @error('product_price') is-invalid @enderror" required id="product_price" name="product_price" type="text" placeholder="Enter product price" value="{{ old('product_price') }}">
                @error('product_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_for" class="form-label">Product For</label>
                <input class="form-control @error('product_for') is-invalid @enderror" required id="product_for" name="product_for" type="text" placeholder="Enter product for" value="{{ old('product_for') }}">
                @error('product_for')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Upload Product Image</label>
                <div class="row">
                    <div class="col-6 col-sm-4">
                        <img id="preview-image-before-upload" src="{{asset('/img/Upload Image.png')}}" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class="mb-2 rounded-3">
                        <input class="form-control form-control-sm @error('img') is-invalid @enderror" type="file" name="img" value="{{ old('img') }}" id="img">
                        @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-lg btn-dark-green px-4 py-2">Add Product</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('javascript')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@endsection