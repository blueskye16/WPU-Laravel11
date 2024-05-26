<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Fabianus kevin',
        'title' => 'About Page'
    ]);
});

Route::get('/posts', function () {
    return view(
        'posts',
        [
            'title' => 'Blog Page', 
            'posts' => Post::all()
        ]
    );
});

// Route::get('/posts/{id}', function($id) {
//     dd($id);
// });

/*
    /posts/{id} --> variabel id ditangkep yang artinya apapun yang diketik setelah /posts/ bakal ditangkep sebagai {id} dan di return di function $id
*/

Route::get('/posts/{slug}', function ($slug) {

    // $post = Arr::first(Post::all(), function ($post) use ($slug) {
    //     return $post['slug'] == $slug;
    // });
    $post = Post::find($slug);

    // dd($post); --> ngecek di dump
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', [
        'email' => 'fabianuskevin@gmail.com',
        'title' => 'Contact Page'
    ]);
});


