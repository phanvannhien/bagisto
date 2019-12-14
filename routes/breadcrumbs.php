<?php
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Trang chủ',  '/' );
});

// Category product
Breadcrumbs::for('category', function ($trail, $category ) {
    $trail->parent('home');
    $trail->push( $category->name  ,  '#' );
});

// product
Breadcrumbs::for('product', function ($trail, $product  ) {
    $trail->parent('home');
    $trail->push( $product->name  ,  '#' );
});
