

@if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts()->count())

<div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="Bán chạy">-{{ __('shop::app.home.featured-products') }}</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" 
                        href="#"><i class="ps-icon-arrow-right"></i>Lùi</a>
                        <a class="ps-next" href="#">Tới<i class="ps-icon-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)

                    @include ('shop::products.list.carousel', ['product' => $productFlat])
                    
                @endforeach

            </div>
        </div>
    </div>
</div>
@endif