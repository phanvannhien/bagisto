@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.catalog.products.edit-title') }}
@stop

@section('content')
    <div class="content">
        <?php $locale = request()->get('locale') ?: app()->getLocale(); ?>
        <?php $channel = request()->get('channel') ?: core()->getDefaultChannelCode(); ?>

        {!! view_render_event('bagisto.admin.catalog.product.edit.before', ['product' => $product]) !!}

        <form method="POST" action="" @submit.prevent="onSubmit" enctype="multipart/form-data">

            <div class="page-header">

                <div class="page-title">
                    <h1>
<<<<<<< HEAD
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>
=======
                        <i class="icon angle-left-icon back-link"
                           onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

                        {{ __('admin::app.catalog.products.edit-title') }}
                    </h1>

                    <div class="control-group">
                        <select class="control" id="channel-switcher" name="channel">
                            @foreach (core()->getAllChannels() as $channelModel)

<<<<<<< HEAD
                                <option value="{{ $channelModel->code }}" {{ ($channelModel->code) == $channel ? 'selected' : '' }}>
=======
                                <option
                                    value="{{ $channelModel->code }}" {{ ($channelModel->code) == $channel ? 'selected' : '' }}>
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                                    {{ $channelModel->name }}
                                </option>

                            @endforeach
                        </select>
                    </div>

                    <div class="control-group">
                        <select class="control" id="locale-switcher" name="locale">
                            @foreach (core()->getAllLocales() as $localeModel)

<<<<<<< HEAD
                                <option value="{{ $localeModel->code }}" {{ ($localeModel->code) == $locale ? 'selected' : '' }}>
=======
                                <option
                                    value="{{ $localeModel->code }}" {{ ($localeModel->code) == $locale ? 'selected' : '' }}>
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                                    {{ $localeModel->name }}
                                </option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.catalog.products.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                @csrf()

                <input name="_method" type="hidden" value="PUT">

                @foreach ($product->attribute_family->attribute_groups as $index => $attributeGroup)
                    <?php $customAttributes = $product->getEditableAttributes($attributeGroup); ?>

                    @if (count($customAttributes))

                        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.before', ['product' => $product]) !!}

<<<<<<< HEAD
                        <accordian :title="'{{ __($attributeGroup->name) }}'" :active="{{$index == 0 ? 'true' : 'false'}}">
=======
                        <accordian :title="'{{ __($attributeGroup->name) }}'"
                                   :active="{{$index == 0 ? 'true' : 'false'}}">
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                            <div slot="body">
                                {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.controls.before', ['product' => $product]) !!}

                                @foreach ($customAttributes as $attribute)

                                    <?php
<<<<<<< HEAD
                                        $validations = [];

                                        if ($attribute->is_required)
                                            array_push($validations, 'required');

                                        if ($attribute->type == 'price')
                                            array_push($validations, 'decimal');

                                        array_push($validations, $attribute->validation);

                                        $validations = implode('|', array_filter($validations));
=======
                                    $validations = [];

                                    if ($attribute->is_required) {
                                        array_push($validations, 'required');
                                    }

                                    if ($attribute->type == 'price') {
                                        array_push($validations, 'decimal');
                                    }

                                    array_push($validations, $attribute->validation);

                                    $validations = implode('|', array_filter($validations));
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                                    ?>

                                    @if (view()->exists($typeView = 'admin::catalog.products.field-types.' . $attribute->type))

<<<<<<< HEAD
                                        <div class="control-group {{ $attribute->type }}" @if ($attribute->type == 'multiselect') :class="[errors.has('{{ $attribute->code }}[]') ? 'has-error' : '']" @else :class="[errors.has('{{ $attribute->code }}') ? 'has-error' : '']" @endif>

                                            <label for="{{ $attribute->code }}" {{ $attribute->is_required ? 'class=required' : '' }}>
=======
                                        <div class="control-group {{ $attribute->type }}"
                                             @if ($attribute->type == 'multiselect') :class="[errors.has('{{ $attribute->code }}[]') ? 'has-error' : '']"
                                             @else :class="[errors.has('{{ $attribute->code }}') ? 'has-error' : '']" @endif>

                                            <label
                                                for="{{ $attribute->code }}" {{ $attribute->is_required ? 'class=required' : '' }}>
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                                                {{ $attribute->admin_name }}

                                                @if ($attribute->type == 'price')
                                                    <span class="currency-code">({{ core()->currencySymbol(core()->getBaseCurrencyCode()) }})</span>
                                                @endif

                                                <?php
<<<<<<< HEAD
                                                    $channel_locale = [];

                                                    if ($attribute->value_per_channel)
                                                        array_push($channel_locale, $channel);

                                                    if ($attribute->value_per_locale)
                                                        array_push($channel_locale, $locale);
=======
                                                $channel_locale = [];

                                                if ($attribute->value_per_channel) {
                                                    array_push($channel_locale, $channel);
                                                }

                                                if ($attribute->value_per_locale) {
                                                    array_push($channel_locale, $locale);
                                                }
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                                                ?>

                                                @if (count($channel_locale))
                                                    <span class="locale">[{{ implode(' - ', $channel_locale) }}]</span>
                                                @endif
                                            </label>

                                            @include ($typeView)

<<<<<<< HEAD
                                            <span class="control-error"  @if ($attribute->type == 'multiselect') v-if="errors.has('{{ $attribute->code }}[]')" @else  v-if="errors.has('{{ $attribute->code }}')"  @endif>
=======
                                            <span class="control-error"
                                                  @if ($attribute->type == 'multiselect') v-if="errors.has('{{ $attribute->code }}[]')"
                                                  @else  v-if="errors.has('{{ $attribute->code }}')"  @endif>
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                                                @if ($attribute->type == 'multiselect')
                                                    @{{ errors.first('{!! $attribute->code !!}[]') }}
                                                @else
                                                    @{{ errors.first('{!! $attribute->code !!}') }}
                                                @endif
                                            </span>
                                        </div>

                                    @endif

                                @endforeach

                                {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.controls.after', ['product' => $product]) !!}
                            </div>
                        </accordian>

                        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.after', ['product' => $product]) !!}

                    @endif

                @endforeach

<<<<<<< HEAD
=======
                {!! view_render_event(
                  'bagisto.admin.catalog.product.edit_form_accordian.additional_views.before',
                   ['product' => $product])
                !!}
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                @foreach ($product->getTypeInstance()->getAdditionalViews() as $view)

                    @include ($view)

                @endforeach
<<<<<<< HEAD
                
=======

                {!! view_render_event(
                  'bagisto.admin.catalog.product.edit_form_accordian.additional_views.after',
                   ['product' => $product])
                !!}
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
            </div>

        </form>

        {!! view_render_event('bagisto.admin.catalog.product.edit.after', ['product' => $product]) !!}
    </div>
@stop

@push('scripts')
    <script src="{{ asset('vendor/webkul/admin/assets/js/tinyMCE/tinymce.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#channel-switcher, #locale-switcher').on('change', function (e) {
                $('#channel-switcher').val()
                var query = '?channel=' + $('#channel-switcher').val() + '&locale=' + $('#locale-switcher').val();

                window.location.href = "{{ route('admin.catalog.products.edit', $product->id)  }}" + query;
            })

            tinymce.init({
                selector: 'textarea#description, textarea#short_description',
                height: 200,
                width: "100%",
                plugins: 'image imagetools media wordcount save fullscreen code',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code',
                image_advtab: true
            });
        });
    </script>
<<<<<<< HEAD
@endpush
=======
@endpush
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
