
@extends('user.master')
@section('description', 'Đây là trang chủ')
@section('content')
<section id="featured" class="row mt40">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
        <div id="searcharea">
            <label for="search">Live search</label>
            <input type="search" name="search" id="search" placeholder ="name or info"/>
        </div>
        <div id="id01"></div>
    </div>
</section>

<!-- Latest Product-->
<section id="latest" class="row">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
        <ul class="thumbnails">
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <a href="#"><img alt="" src="{{ url('public/user/img/product1a.jpg') }}"></a>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <a href="#"><img alt="" src="{{ url('public/user/img/product2a.jpg') }}"></a>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <span class="new tooltip-test" >New</span>
                    <a href="#"><img alt="" src="{{ url('public/user/img/product1a.jpg') }}"></a>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <a href="#"><img alt="" src="{{ url('public/user/img/product2a.jpg') }}"></a>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection
