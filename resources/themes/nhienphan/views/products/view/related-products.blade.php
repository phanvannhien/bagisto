<?php
    $relatedProducts = $product->related_products()->get();
?>

@if ($relatedProducts->count())
    <div class="attached-products-wrapper">

        <div class="title">
            {{ __('shop::app.products.related-product-title') }}
            <span class="border-bottom"></span>
        </div>

        <div class="row align-items-stretch justify-content-start">

            @foreach ($relatedProducts as $related_product)
            <div class="col-md-4 col-lg-3">
                @include ('shop::products.list.card', ['product' => $related_product])
            </div>
            @endforeach

        </div>

    </div>
@endif