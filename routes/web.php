<?php

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
            'posts' =>
                [
                    [
                        'id' => '1',
                        'slug' => 'judul-artikel-1',
                        'title' => 'Judul Artikel 1',
                        'author' => 'Fabianus Kevin S',
                        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corrupti, nisi
                    corporis eos aspernatur ex
                    laboriosam numquam delectus quisquam repellendus odit incidunt provident ut, accusantium consequatur quo,
                    debitis sapiente officia.'
                    ],
                    [
                        'id' => '2',
                        'slug' => 'judul-artikel-2',
                        'title' => 'Judul Artikel 2',
                        'author' => 'siapala Kevin S',
                        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corrupti, nisi
                    corporis eos aspernatur ex
                    laboriosam numquam delectus quisquam repellendus odit incidunt provident ut, accusantium consequatur quo,
                    debitis sapiente officia.'
                    ]
                ]
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
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fabianus Kevin S',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corrupti, nisi
        corporis eos aspernatur ex
        laboriosam numquam delectus quisquam repellendus odit incidunt provident ut, accusantium consequatur quo,
        debitis sapiente officia.'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'siapala Kevin S',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corrupti, nisi
        corporis eos aspernatur ex
        laboriosam numquam delectus quisquam repellendus odit incidunt provident ut, accusantium consequatur quo,
        debitis sapiente officia.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post); --> ngecek di dump
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        'email' => 'fabianuskevin@gmail.com',
        'title' => 'Contact Page'
    ]);
});


