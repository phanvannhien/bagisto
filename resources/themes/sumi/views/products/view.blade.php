@extends('shop::layouts.master')

@section('page_title')
    {{ trim($product->meta_title) != "" ? $product->meta_title : $product->name }}
@stop

@section('seo')
    <meta name="description" content="{{ trim($product->meta_description) != "" ? $product->meta_description : str_limit(strip_tags($product->description), 120, '') }}"/>
    <meta name="keywords" content="{{ $product->meta_keywords }}"/>
@stop

@section('content-wrapper')

    {!! view_render_event('bagisto.shop.products.view.before', ['product' => $product]) !!}

    <section class="ps-product--detail pt-60 product-detail">
        <div class="ps-container">
            <div class="layouter">
                <product-view>
                    <div class="form-container">
                        @csrf()
                        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                        @include ('shop::products.view.gallery')

                        <div class="details">

                            <div class="product-heading">
                                <span>{{ $product->name }}</span>
                            </div>

                            @include ('shop::products.review', ['product' => $product])

                            @include ('shop::products.price', ['product' => $product])

                            @include ('shop::products.view.stock', ['product' => $product])

                            {!! view_render_event('bagisto.shop.products.view.short_description.before', ['product' => $product]) !!}

                            <div class="description">
                                {!! $product->short_description !!}
                            </div>

                            {!! view_render_event('bagisto.shop.products.view.short_description.after', ['product' => $product]) !!}


                            {!! view_render_event('bagisto.shop.products.view.quantity.before', ['product' => $product]) !!}

                            @if ($product->getTypeInstance()->showQuantityBox())
                                <quantity-changer></quantity-changer>
                            @else
                                <input type="hidden" name="quantity" value="1">
                            @endif
                            

                            {!! view_render_event('bagisto.shop.products.view.quantity.after', ['product' => $product]) !!}

                            @include ('shop::products.view.configurable-options')

                            @include ('shop::products.view.downloadable')

                            @include ('shop::products.view.grouped-products')

                            @include ('shop::products.view.bundle-options')
                            <hr/>
                            @include ('shop::products.view.product-add')
    
                            
                        </div>
                    </div>
                </product-view>
            </div>

            <div class="clearfix"></div>
            <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                    <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Chi tiết</a></li>
                    <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Mô tả</a></li>
                    <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">Đánh giá</a></li>
                    
                </ul>
            </div>
            <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                    <div class="full-description">
                        {!! view_render_event('bagisto.shop.products.view.description.before', ['product' => $product]) !!}
                        {!! $product->description !!}
                        {!! view_render_event('bagisto.shop.products.view.description.after', ['product' => $product]) !!}

                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_02">
                    @include ('shop::products.view.attributes')
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_03">
                    @include ('shop::products.view.reviews')
                </div>
                
            </div>

            @include ('shop::products.view.related-products')

            @include ('shop::products.view.up-sells')
            
        </div>

        

    </section>

    {!! view_render_event('bagisto.shop.products.view.after', ['product' => $product]) !!}
@endsection

@push('scripts')

    <script type="text/x-template" id="product-view-template">
        <form method="POST" id="product-form" action="{{ route('cart.add', $product->product_id) }}" @click="onSubmit($event)">

            <input type="hidden" name="is_buy_now" v-model="is_buy_now">

            <slot></slot>

        </form>
    </script>

    <script type="text/x-template" id="quantity-changer-template">
        <div class="quantity control-group clearfix" :class="[errors.has(controlName) ? 'has-error' : '']">
            <label class="required">{{ __('shop::app.products.quantity') }}</label>

            <button type="button" class="decrease" @click="decreaseQty()">-</button>

            <input :name="controlName" class="control" :value="qty" :v-validate="validations" data-vv-as="&quot;{{ __('shop::app.products.quantity') }}&quot;" readonly>

            <button type="button" class="increase" @click="increaseQty()">+</button>

            <span class="control-error" v-if="errors.has(controlName)">@{{ errors.first(controlName) }}</span>
        </div>
    </script>

    <script>

        Vue.component('product-view', {

            template: '#product-view-template',

            inject: ['$validator'],

            data: function() {
                return {
                    is_buy_now: 0,
                }
            },

            methods: {
                onSubmit: function(e) {
                    if (e.target.getAttribute('type') != 'submit')
                        return;

                    e.preventDefault();

                    var this_this = this;

                    this.$validator.validateAll().then(function (result) {
                        if (result) {
                            this_this.is_buy_now = e.target.classList.contains('buynow') ? 1 : 0;

                            setTimeout(function() {
                                document.getElementById('product-form').submit();
                            }, 0);
                        }
                    });
                }
            }
        });

        Vue.component('quantity-changer', {
            template: '#quantity-changer-template',

            inject: ['$validator'],

            props: {
                controlName: {
                    type: String,
                    default: 'quantity'
                },

                quantity: {
                    type: [Number, String],
                    default: 1
                },

                minQuantity: {
                    type: [Number, String],
                    default: 1
                },

                validations: {
                    type: String,
                    default: 'required|numeric|min_value:1'
                }
            },

            data: function() {
                return {
                    qty: this.quantity
                }
            },

            watch: {
                quantity: function (val) {
                    this.qty = val;

                    this.$emit('onQtyUpdated', this.qty)
                }
            },

            methods: {
                decreaseQty: function() {
                    if (this.qty > this.minQuantity)
                        this.qty = parseInt(this.qty) - 1;

                    this.$emit('onQtyUpdated', this.qty)
                },

                increaseQty: function() {
                    this.qty = parseInt(this.qty) + 1;

                    this.$emit('onQtyUpdated', this.qty)
                }
            }
        });

        $(document).ready(function() {
            var addTOButton = document.getElementsByClassName('add-to-buttons')[0];
            document.getElementById('loader').style.display="none";
            addTOButton.style.display="flex";
        });

        window.onload = function() {
            var thumbList = document.getElementsByClassName('thumb-list')[0];
            var thumbFrame = document.getElementsByClassName('thumb-frame');
            var productHeroImage = document.getElementsByClassName('product-hero-image')[0];

            if (thumbList && productHeroImage) {

                for(let i=0; i < thumbFrame.length ; i++) {
                    thumbFrame[i].style.height = (productHeroImage.offsetHeight/4) + "px";
                    thumbFrame[i].style.width = (productHeroImage.offsetHeight/4)+ "px";
                }

                if (screen.width > 720) {
                    thumbList.style.width = (productHeroImage.offsetHeight/4) + "px";
                    thumbList.style.minWidth = (productHeroImage.offsetHeight/4) + "px";
                    thumbList.style.height = productHeroImage.offsetHeight + "px";
                }
            }

            window.onresize = function() {
                if (thumbList && productHeroImage) {

                    for(let i=0; i < thumbFrame.length; i++) {
                        thumbFrame[i].style.height = (productHeroImage.offsetHeight/4) + "px";
                        thumbFrame[i].style.width = (productHeroImage.offsetHeight/4)+ "px";
                    }

                    if (screen.width > 720) {
                        thumbList.style.width = (productHeroImage.offsetHeight/4) + "px";
                        thumbList.style.minWidth = (productHeroImage.offsetHeight/4) + "px";
                        thumbList.style.height = productHeroImage.offsetHeight + "px";
                    }
                }
            }
        };
    </script>
@endpush