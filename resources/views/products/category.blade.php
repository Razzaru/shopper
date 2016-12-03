@extends('layouts.main')

@section('main')
    <section class="main-content">
        <br>
            <div class="col-lg-12">
                <ul class="thumbnails listing-products">
                    @foreach($category->children() as $children)
                        <li class="span6">
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <a href="/{{ $category->path }}/{{ $children->path }}"><img alt=""
                                                                   src="{{ $mainPath }}/{{ $category->path }}/{{ $children->image_path }}"></a><br/>
                                <a href="/{{ $category->path }}/{{ $children->path }}" class="title">{{ $children->title }}</a><br/>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
    </section>
@stop