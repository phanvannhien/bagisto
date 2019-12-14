@if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts( 8 )->count())
    <section class="featured-products">

        <div class="featured-heading">
            {{ __('shop::app.home.featured-products') }}<br/>

            <span class="featured-seperator" style="color:lightgrey;">_____</span>
        </div>

        <div class="featured-grid">
            <div class="row align-items-stretch">
            @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)
                <div class="col-md-4 col-lg-3">
                @include ('shop::products.list.card', ['product' => $productFlat])
                </div>
            @endforeach
            </div>
        </div>

    </section>
@endif