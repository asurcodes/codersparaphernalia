<?php

Route::view('/', 'home')->name('home');
Route::get('search', 'ProductsController@search')->name('product.search');
Route::get('categories/{category}', 'CategoriesController@show')->name('category.show');
Route::get('product/{product}', 'ProductsController@show')->name('product.show');
Route::get('/sitemap', 'SitemapController@sitemap')->name('sitemap');
