<?php

return [
    [
        'key'   => 'account',
        'name'  => 'shop::app.layouts.my-account',
        'route' =>'customer.profile.index',
        'sort'  => 1,
    ], [
        'key'   => 'account.profile',
        'name'  => 'shop::app.layouts.profile',
        'route' =>'customer.profile.index',
        'sort'  => 1,
    ], [
        'key'   => 'account.reviews',
        'name'  => 'shop::app.layouts.reviews',
        'route' =>'customer.reviews.index',
        'sort'  => 3,
    ], [
        'key'   => 'account.wishlist',
        'name'  => 'shop::app.layouts.wishlist',
        'route' =>'customer.wishlist.index',
        'sort'  => 4,
    ],[
        'key'   => 'account.downloadables',
        'name'  => 'shop::app.layouts.downloadable-products',
        'route' =>'customer.downloadable_products.index',
        'sort'  => 6,
    ]
];

?>