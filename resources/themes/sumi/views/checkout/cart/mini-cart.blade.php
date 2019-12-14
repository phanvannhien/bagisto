@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<?php $cart = cart()->getCart(); ?>

@if ($cart)
    <?php $items = $cart->items; ?>

    <div class="ps-cart">
        <a class="ps-cart__toggle" href="{{ route('shop.checkout.cart.index') }}">
            <span><i>{{ $cart->items->count() }}</i></span>
            <i class="ps-icon-shopping-cart"></i>
        </a>
    </div>

    <div class="ps-cart__listing">
        <div class="ps-cart__content">
            @foreach ($items as $item)
                <div class="ps-cart-item">
                    
                    <div class="ps-cart-item__thumbnail">
                        <a href="product-detail.html"></a>
                        @php
                            $images = $item->product->getTypeInstance()->getBaseImage($item);
                        @endphp
                        <img src="{{ $images['small_image_url'] }}" />
                        
                    </div>
                    <div class="ps-cart-item__content">
                        <a class="ps-cart-item__title" href="product-detail.html">{{ $item->name }}</a>
                        <p>
                            <i>{{ $item->quantity }}</i>
                            <i>{{ core()->currency($item->base_total) }}</i>
                        </p>
                        @if (isset($item->additional['attributes']))
                            <div class="item-options">
                                
                                @foreach ($item->additional['attributes'] as $attribute)
                                    <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                @endforeach

                            </div>
                        @endif
                    </div>
                </div>
                
                

            @endforeach
        </div>
        <div class="ps-cart__total">
            <p>{{ __('shop::app.checkout.cart.cart-subtotal') }}:<span>{{ core()->currency($cart->base_sub_total) }}</span></p>
        </div>
        <div class="ps-cart__footer">
            <a class="ps-btn" href="{{ route('shop.checkout.onepage.index') }}">
                {{ __('shop::app.minicart.checkout') }}
                <i class="ps-icon-arrow-left"></i></a>
        </div>
    </div>


@else
    <div class="ps-cart">
        <a class="ps-cart__toggle" href="{{ route('shop.checkout.cart.index') }}">
            <span><i>0</i></span>
            <i class="ps-icon-shopping-cart"></i>
        </a>
    </div>

@endif