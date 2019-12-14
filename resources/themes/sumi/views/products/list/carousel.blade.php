@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<?php $productBaseImage = $productImageHelper->getProductBaseImage($product); ?>

<div class="ps-shoes--carousel">
    <div class="ps-shoe">
        <div class="ps-shoe__thumbnail">
            @if ($product->new)
            <div class="ps-badge"><span>{{ __('shop::app.products.new') }}</span></div>
            @endif
            <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
            <img src="{{ $productBaseImage['medium_image_url'] }}" alt="{{ $product->name }}">
            <a class="ps-shoe__overlay" href="{{ route('shop.products.index', $product->url_key) }}" 
                title="{{ $product->name }}">
            </a>
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
                <a class="ps-shoe__name" href="{{ route('shop.products.index', $product->url_key) }}">
                    {{ $product->name }}

                </a>
                <p class="">{!! $product->getTypeInstance()->getPriceHtml() !!}</p>
                
            </div>
            
        </div>
    </div>
</div>
