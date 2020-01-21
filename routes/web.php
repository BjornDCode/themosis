<?php

/**
 * Application routes.
 */

// Single Page Routes
Route::any('page', function ($page) {
    return view('page', [
        'page' => $page,
    ]);
});

Route::get('blog/{post}', 'PostController@show');

// Post Routes
// - Single Post
// - List

// Front Page
Route::get('/', function () {
    return view('welcome');
});
