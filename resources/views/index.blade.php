@extends('layouts.main')

@section('homepage-slider')
    <section class="homepage-slider" id="home-slider">
        <div class="flexslider">
            <ul class="slides">
                @foreach($headers as $header)
                    <li>
                        <img src="img/app/carousel/{{ $header->image_path }}" alt=""/>
                        <div class="intro">
                            @if($header->title)
                                <h1>{{ $header->title }}</h1>
                            @endif
                            @if($header->subtitle)
                                {!! $header->subtitle !!}
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="header_text">
        ANALNIE SHCENKI SUKA EBUT MENYA AAAA SPASITE
        <br/>GOVNO DAGESTAN BABI
    </section>
@stop


@section('featured-items')
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span
                                            class="line">Featured <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a
                                                class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel" class="myCarousel carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails">
                                        @foreach($featuredActive as $product)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="product_detail.html"><img
                                                                    src="/img/app/ladies/{{ $product->image_path }}"
                                                                    alt=""/></a></p>
                                                    <a href="product_detail.html"
                                                       class="title">{{ $product->title }}</a><br/>
                                                    <a href="products.html"
                                                       class="category">{{ $product->category()->first()->title }}</a>
                                                    <p class="price">{{ $product->price }}</p>
                                                </div>
                                            </li>
                                    @endforeach
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        @foreach($featuredSecond as $product)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="product_detail.html"><img
                                                                    src="/img/app/ladies/{{ $product->image_path }}"
                                                                    alt=""/></a></p>
                                                    <a href="product_detail.html"
                                                       class="title">{{ $product->title }}</a><br/>
                                                    <a href="products.html"
                                                       class="category">{{ $product->category()->first()->title }}</a>
                                                    <p class="price">{{ $product->price }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                @stop

                @section('latest-items')
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">
                            <span class="pull-left"><span class="text"><span
                                            class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a
                                                class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
                            </h4>
                            <div id="myCarousel-2" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            @foreach($latestActive as $product)
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="product_detail.html"><img
                                                                        src="/img/app/ladies/{{ $product->image_path }}"
                                                                        alt=""/></a></p>
                                                        <a href="product_detail.html"
                                                           class="title">{{ $product->title }}</a><br/>
                                                        <a href="products.html"
                                                           class="category">{{ $product->category()->first()->title }}</a>
                                                        <p class="price">{{ $product->price }}</p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                            @foreach($latestSecond as $product)
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="product_detail.html"><img
                                                                        src="/img/app/ladies/{{ $product->image_path }}"
                                                                        alt=""/></a></p>
                                                        <a href="product_detail.html"
                                                           class="title">{{ $product->title }}</a><br/>
                                                        <a href="products.html"
                                                           class="category">{{ $product->category()->first()->title }}</a>
                                                        <p class="price">{{ $product->price }}</p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @stop

                @section('features')
                    <div class="row feature_box">
                        <div class="span4">
                            <div class="service">
                                <div class="responsive">
                                    <img src="/img/app/feature_img_2.png" alt=""/>
                                    <h4>MODERN <strong>DESIGN</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown
                                        printer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="customize">
                                    <img src="/img/app/feature_img_1.png" alt=""/>
                                    <h4>FREE <strong>SHIPPING</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown
                                        printer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="support">
                                    <img src="/img/app/feature_img_3.png" alt=""/>
                                    <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown
                                        printer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@stop


@section('clients')
    <section class="our_client">
        <h4 class="title"><span class="text">Manufactures</span></h4>
        <div class="row">
            <div class="span2">
                <a href="#"><img alt="" src="/img/app/clients/14.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="/img/app/clients/35.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="/img/app/clients/1.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="/img/app/clients/2.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="/img/app/clients/3.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="/img/app/clients/4.png"></a>
            </div>
        </div>
    </section>
@stop