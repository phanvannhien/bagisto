@extends('shop::layouts.master')

@php
    $channel = core()->getCurrentChannel();

    $homeSEO = $channel->home_seo;

    if (isset($homeSEO)) {
        $homeSEO = json_decode($channel->home_seo);

        $metaTitle = $homeSEO->meta_title;

        $metaDescription = $homeSEO->meta_description;

        $metaKeywords = $homeSEO->meta_keywords;
    }
@endphp

@section('page_title')
    {{ isset($metaTitle) ? $metaTitle : "" }}
@endsection

@section('head')

    @if (isset($homeSEO))
        @isset($metaTitle)
            <meta name="title" content="{{ $metaTitle }}" />
        @endisset

        @isset($metaDescription)
            <meta name="description" content="{{ $metaDescription }}" />
        @endisset

        @isset($metaKeywords)
            <meta name="keywords" content="{{ $metaKeywords }}" />
        @endisset
    @endif
@endsection

@section('content-wrapper')
    
    {!! view_render_event('bagisto.shop.home.content.before') !!}
    @include("shop::home.slider")

    
    <div class="ps-section masonry-root pt-80 pb-40">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="Promotion">- Our Event</h3>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="3" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                    <div class="ps-masonry">
                    <div class="grid-sizer"></div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html">
                            <img src="{{ bagisto_asset('images/offer/home-2-1.jpg') }}" alt=""></a></div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html">
                            <img src="{{ bagisto_asset('images/offer/home-2-2.jpg') }}" alt=""></a></div>
                    </div>
                    <div class="grid-item high">
                        <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html">
                            <img src="{{ bagisto_asset('images/offer/home-2-5.jpg') }}" alt=""></a></div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html">
                            <img src="{{ bagisto_asset('images/offer/home-2-3.jpg') }}" alt=""></a></div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html">
                            <img src="{{ bagisto_asset('images/offer/home-2-4.jpg') }}" alt=""></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('shop::home.featured-products')
    
    {{ view_render_event('bagisto.shop.home.content.after') }}

@endsection
