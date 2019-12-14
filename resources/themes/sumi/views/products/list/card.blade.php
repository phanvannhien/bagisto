{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
<?php $productBaseImage = $productImageHelper->getProductBaseImage($product); ?>

<div class="ps-shoe mb-30">
    <div class="ps-shoe__thumbnail">
        @if ($product->new)
            <div class="ps-badge"><span>
                {{ __('shop::app.products.new') }}
            </span></div>
        @endif
 
        <a class="ps-shoe__favorite" href="#">
            <i class="ps-icon-heart"></i>
        </a>

        <img src="{{ $productBaseImage['medium_image_url'] }}" alt="{{ $product->name }}">

        <a class="ps-shoe__overlay" href="{{ route('shop.products.index', $product->url_key) }}"></a>
    </div>
    <div class="ps-shoe__content">
        <div class="ps-shoe__variants">
            
            <select class="ps-rating ps-shoe__rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
            </select>
        </div>
        <div class="ps-shoe__detail">
            <a class="ps-shoe__name" href="{{ url()->to('/').'/products/' . $product->url_key }}">
                {{ $product->name }}</a>
           
            <p> @include ('shop::products.price', ['product' => $product])</p>
        </div>
        @include('shop::products.add-buttons', ['product' => $product])
    </div>
</div>

{!! view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]) !!}