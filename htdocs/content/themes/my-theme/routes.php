<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */

Route::view('/blog/{post}', 'blog.single');
Route::any('home', function() {
    return view('pages.default');
});

// Single Page Routes
Route::any('page', function ($page) {
    return view('pages.default');
});

// Front Page
Route::view('front', 'pages.front');
