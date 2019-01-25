<?php

Route::view('/', 'home')->name('home');
Route::get('search', 'ProductsController@search')->name('product.search');
Route::get('categories/{category}', 'CategoriesController@show')->name('category.show');
Route::get('tags/{tag}', 'TagsController@show')->name('tag.show');
