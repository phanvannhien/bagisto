@extends('shop::layouts.master')

@section('page_title')
    {{ $category->meta_title ?? $category->name }}
@stop

@section('seo')
    <meta name="description" content="{{ $category->meta_description }}"/>
    <meta name="keywords" content="{{ $category->meta_keywords }}"/>
@stop

@section('content-wrapper')
    @inject ('productRepository', 'Webkul\Product\Repositories\ProductRepository')

    <div class="ps-products-wrap pt-80 pb-80">
        {!! view_render_event('bagisto.shop.products.index.before', ['category' => $category]) !!}

        <div class="ps-products" data-mh="product-listing">

            <div class="category-block">
               
                <?php $products = $productRepository->getAll($category->id); ?>

                @if ($products->count())
                    <div class="ps-product-action">
                        @include ('shop::products.list.toolbar')
                    </div>
                    @inject ('toolbarHelper', 'Webkul\Product\Helpers\Toolbar')

                    @if ($toolbarHelper->getCurrentMode() == 'grid')
                        <div class="ps-product__columns">
                            @foreach ($products as $productFlat)
                            <div class="ps-product__column">
                                @include ('shop::products.list.card', ['product' => $productFlat])
                            </div>
                            @endforeach
                        </div>
                    @else
                        <div class="product-list">
                            @foreach ($products as $productFlat)
                                @include ('shop::products.list.card', ['product' => $productFlat])
                            @endforeach
                        </div>
                    @endif

                    {!! view_render_event('bagisto.shop.products.index.pagination.before', ['category' => $category]) !!}

                    <div class="bottom-toolbar">
                        {{ $products->appends(request()->input())->links() }}
                    </div>

                    {!! view_render_event('bagisto.shop.products.index.pagination.after', ['category' => $category]) !!}

                @else

                    <div class="product-list empty">
                        <h2>{{ __('shop::app.products.whoops') }}</h2>

                        <p>
                            {{ __('shop::app.products.empty') }}
                        </p>
                    </div>

                @endif
            
            </div>
        </div>

        <div class="ps-sidebar" data-mh="product-listing">
            @if (in_array($category->display_mode, [null, 'products_only', 'products_and_description']))
                @include ('shop::products.list.layered-navigation')
            @endif
        </div>

        {!! view_render_event('bagisto.shop.products.index.after', ['category' => $category]) !!}
    </div>
    
@stop

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.responsive-layred-filter').css('display','none');
            $(".sort-icon, .filter-icon").on('click', function(e){
                var currentElement = $(e.currentTarget);
                if (currentElement.hasClass('sort-icon')) {
                    currentElement.removeClass('sort-icon');
                    currentElement.addClass('icon-menu-close-adj');
                    currentElement.next().removeClass();
                    currentElement.next().addClass('icon filter-icon');
                    $('.responsive-layred-filter').css('display','none');
                    $('.pager').css('display','flex');
                    $('.pager').css('justify-content','space-between');
                } else if (currentElement.hasClass('filter-icon')) {
                    currentElement.removeClass('filter-icon');
                    currentElement.addClass('icon-menu-close-adj');
                    currentElement.prev().removeClass();
                    currentElement.prev().addClass('icon sort-icon');
                    $('.pager').css('display','none');
                    $('.responsive-layred-filter').css('display','block');
                    $('.responsive-layred-filter').css('margin-top','10px');
                } else {
                    currentElement.removeClass('icon-menu-close-adj');
                    $('.responsive-layred-filter').css('display','none');
                    $('.pager').css('display','none');
                    if ($(this).index() == 0) {
                        currentElement.addClass('sort-icon');
                    } else {
                        currentElement.addClass('filter-icon');
                    }
                }
            });
        });
    </script>
@endpush