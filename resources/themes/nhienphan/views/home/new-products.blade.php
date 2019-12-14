@if (app('Webkul\Product\Repositories\ProductRepository')->getNewProducts()->count())
    <section class="featured-products">

        <div class="featured-heading">
            {{ __('shop::app.home.new-products') }}<br/>

            <span class="featured-seperator" style="color:lightgrey;">_____</span>
        </div>

  
        <div class="row align-items-stretch">
            @foreach (app('Webkul\Product\Repositories\ProductRepository')->getNewProducts() as $productFlat)
            <div class="col-md-4 col-lg-3">
                @include ('shop::products.list.card', ['product' => $productFlat])
            </div>
            @endforeach

        </div>

    </section>
@endif
