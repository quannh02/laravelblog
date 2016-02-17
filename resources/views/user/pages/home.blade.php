


    @extends('user.master')
    @section('nav')
    <div id="maincontainer">
        <!-- Slider Start-->
        @include('user.blocks.slider')
                <!-- Slider End-->

        <!-- Section Start-->
        @include('user.blocks.otherdetail')
                <!-- Section End-->
    @endsection
        @section('description', 'Đây là trang chủ')
@section('content')
<section id="featured" class="row mt40">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
        <div id="searcharea">
            <label for="search">Live search</label>
            <input type="search" name="search" id="search" placeholder ="name or info"/>
        </div>
        {{--<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">--}}
        {{--<div class="price-range"><!--price-range-->--}}
            {{--<h2>Price Range</h2>--}}
            {{--<div class="well text-center">--}}
                {{--<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />--}}
                {{--<b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>--}}
            {{--</div>--}}
        {{--</div><!--/price-range-->--}}
        {{--</div>--}}
        <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
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
@section('javascript')
    <script>
        var xmlhttp = new XMLHttpRequest();
        var url = "{!! url('test') !!}";
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                myFunction(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
        function myFunction(response){
            var arr = JSON.parse(response);
            var i;
            var out = '<ul class="thumbnails">';
            for(i = 0; i < arr.length; i++){
                out += '<li class="span3"><a class="prdocutname" href="product.html">'
                        + arr[i].name
                        + '</a><div class="thumbnail"> <span class="sale tooltip-test">Sale</span>'
                        + '<a href="#"><img alt="" src="{{ url('public/user/img/product1.jpg') }}"></a> <div class="pricetag"><span class="spiral"></span><a href="{{ url("mua-hang") }}/'
                        + arr[i].id
                        +'/'
                        + arr[i].name
                        + '" class="productcart">ADD TO CART</a><div class="price"><div class="pricenew">'
                        + formatNumber(arr[i].price)
                        +   '</div><div class="priceold">$5000.00</div></div></div></div></li>';
            }
            out += '</ul>';
            document.getElementById("id01").innerHTML = out;
        }
    </script>
    <script>
        $('#search').keyup(function(){
            var searchField = $('#search').val();
            var myExp = new RegExp(searchField, "i");
            $.getJSON('{!! url('test') !!}', function(data){
                var output ='<ul class="thumbnails">';
                $.each(data, function(key, val){
                    if(val.name.search(myExp) != -1)
                    {
                        output += '<li class="span3"><a class="prdocutname" href="product.html">';
                        output += val.name;
                        output += '</a><div class="thumbnail"> <span class="sale tooltip-test">Sale</span>';
                        output += '<a href="#"><img alt="" src="{{ url('public/user/img/product1.jpg') }}"></a> <div class="pricetag"><span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a><div class="price"><div class="pricenew">';
                        output += formatNumber(val.price);
                        output += '</div><div class="priceold">$5000.00</div></div></div></div></li>';
                    }
                });
                output += '</ul>';
                $('#id01').html(output);
            });
        });
    </script>
@endsection
