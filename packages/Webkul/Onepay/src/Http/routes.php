<?php

Route::group(['middleware' => ['web']], function () {
    Route::prefix('Onepay/standard')->group(function () {

        Route::get('/redirect', 'Webkul\Onepay\Http\Controllers\StandardController@redirect')->name('Onepay.standard.redirect');

        Route::get('/success', 'Webkul\Onepay\Http\Controllers\StandardController@success')->name('Onepay.standard.success');

        Route::get('/cancel', 'Webkul\Onepay\Http\Controllers\StandardController@cancel')->name('Onepay.standard.cancel');
    });
});

Route::get('Onepay/standard/ipn', 'Webkul\Onepay\Http\Controllers\StandardController@ipn')->name('Onepay.standard.ipn');

Route::post('Onepay/standard/ipn', 'Webkul\Onepay\Http\Controllers\StandardController@ipn')->name('Onepay.standard.ipn');
