@extends('layouts.main')

@section('main')
    <section class="main-content">

        <div class="row">
            <div class="span9">
                <ul class="thumbnails listing-products">
                    @foreach($products as $product)
                        <li class="span3">
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <a href="product_detail.html"><img alt=""
                                                                   src="{{ $mainPath }}/{{ $category->path }}/{{ $product->image_path }}"></a><br/>
                                <a href="product_detail.html" class="title">{{ $product->title }}</a><br/>
                                <a href="#" class="category">{{ $product->brand()->first()->title }}</a>
                                <p class="price">{{ $product->price }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <div class="pagination pagination-small pagination-centered">
                    {{ $products->links() }}
                </div>
            </div>
            <div class="span3 col">
                <div class="block">
                    <ul class="nav nav-list">
                        <li class="nav-header">SUBCATEGORIES</li>
                        @foreach($category->getAllSiblings() as $subcategory)
                            <li><a href="/{{ $category->path }}/{{ $subcategory->path }}">{{ $subcategory->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <br/>
                    <ul class="nav nav-list below">
                        <li class="nav-header">BRANDS</li>
                        @foreach($brands as $brand)
                            @if(count($category->howMany($brand)) > 0)
                                <li>
                                    <a href="/{{ $category->path }}/{{ $brand->path }}">{{ $brand->title }}
                                        <span class="badge pull-right">{{ count($category->howMany($brand)) }}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="block">
                    <h4 class="title">
                        <span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a
                                            class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                    </h4>
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <img alt=""
                                                 src="{{ $mainPath }}/{{ $category->path }}/{{ $firstProduct->path }}"><br/>
                                            <a href="product_detail.html"
                                               class="title">{{ $firstProduct->title }}</a><br/>
                                            <a href="#"
                                               class="category">{{ $firstProduct->category()->first()->title }}</a>
                                            <p class="price">{{ $firstProduct->price }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @foreach($randomize as $product)
                                <div class="item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <img alt=""
                                                     src="{{ $mainPath }}/{{ $category->path }}/{{ $product->path }}"><br/>
                                                <a href="product_detail.html"
                                                   class="title">{{ $product->title }}</a><br/>
                                                <a href="#"
                                                   class="category">{{ $product->category()->first()->title }}</a>
                                                <p class="price">{{ $product->price }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop