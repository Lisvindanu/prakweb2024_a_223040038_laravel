<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['tittle' => 'About', 'nama' => 'Lisvindanu']);
});


Route::get('/posts', function () {
    return view('posts', [
        'tittle' => 'Blog',
        'posts' => [
            [
                'id' => '1','slug' => 'judul artikel 1',
                'tittle' => 'judul artikel 1',
                'author' => 'Lisvindanu',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ad amet asperiores autem beatae consequatur consequuntur cum delectus dolor dolorem doloremque
                eum facilis harum in labore magni numquam officia optio pariatur perspiciatis porro praesentium quas quibusdam quos ratione reiciendis repellendus sequi sit veniam veritatis, vitae? Aperiam dolorem dolorum labore nulla provident tempora? Ducimus minima natus quod saepe? Aperiam ea eius illo possimus quos reprehenderit temporibus.
                Accusantium animi corporis dicta excepturi fugiat ipsam nisi sunt velit! Assumenda autem consequatur culpa dolorem doloremque
                dolores eius eum excepturi id ipsam iste minima nesciunt omnis sed, tempora ullam ut velit voluptate. Beatae eius non voluptates.'
            ],
            ['id' => '2','slug' => 'judul artikel 1',
            'tittle' => 'judul artikel 2',
            'author' => 'Lisvindanu',
            'body' => 'quos ratione reiciendis repellendus sequi sit veniam veritatis, vitae? Aperiam dolorem dolorum labore nulla provident tempora? Ducimus minima natus quod saepe? Aperiam ea eius illo possimus quos reprehenderit temporibus.
                Accusantium animi corporis dicta excepturi fugiat ipsam nisi sunt velit! Assumenda autem consequatur culpa dolorem doloremque
                dolores eius eum excepturi id ipsam iste minima nesciunt omnis sed, tempora ullam ut velit voluptate. Beatae eius non voluptates'
            ]
        ]
    ]);
});

Route::get('posts/{id}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul artikel 1',
            'tittle' => 'judul artikel 1',
            'author' => 'Lisvindanu',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ad amet asperiores autem beatae consequatur consequuntur cum delectus dolor dolorem doloremque
                eum facilis harum in labore magni numquam officia optio pariatur perspiciatis porro praesentium quas quibusdam quos ratione reiciendis repellendus sequi sit veniam veritatis, vitae? Aperiam dolorem dolorum labore nulla provident tempora? Ducimus minima natus quod saepe? Aperiam ea eius illo possimus quos reprehenderit temporibus.
                Accusantium animi corporis dicta excepturi fugiat ipsam nisi sunt velit! Assumenda autem consequatur culpa dolorem doloremque
                dolores eius eum excepturi id ipsam iste minima nesciunt omnis sed, tempora ullam ut velit voluptate. Beatae eius non voluptates.'
        ],
        ['id' => '2',
            'tittle' => 'judul artikel 2',
            'slug' => 'judul artikel 1',
            'author' => 'Lisvindanu',
            'body' => 'quos ratione reiciendis repellendus sequi sit veniam veritatis, vitae? Aperiam dolorem dolorum labore nulla provident tempora? Ducimus minima natus quod saepe? Aperiam ea eius illo possimus quos reprehenderit temporibus.
                Accusantium animi corporis dicta excepturi fugiat ipsam nisi sunt velit! Assumenda autem consequatur culpa dolorem doloremque
                dolores eius eum excepturi id ipsam iste minima nesciunt omnis sed, tempora ullam ut velit voluptate. Beatae eius non voluptates'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['tittle' => 'Single Post', 'post' => $post]);
});



Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact', 'nama' => 'Lisvindanu']);
});
// Buat 2 rute baru
// 1. /blog
// 2. buat artikel, judul dan isi
// 2. /contact
// email dan sosmed
