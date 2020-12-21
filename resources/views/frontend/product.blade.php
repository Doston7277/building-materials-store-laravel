@extends('frontend.main')
@section('section')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>our product</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our product -->
<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">

                    <span>We package the products with best services to make you a happy customer.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-bg">
    <div class="product-bg-white">
        <div class="container">
            <div class="row">
                @foreach($products as $product)

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{ asset('uploads/product/' . $product->image) }}" /></i>
                        <h3>{{ $product->name }}</h3>
                        <span>${{ $product->cost }}</span>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    @endsection
