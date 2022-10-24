<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Agung Alfatah",
        "email" => "Agung.alfatah43@gmail.com",
        "image" => "1.jpg"


    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
         "title" => "Postingan Pertama",
         "slug" => "postingan-pertama",
         "author" => "Agung Alfatah",
         "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et excepturi illum, explicabo ducimus rem perferendis, incidunt vel sapiente esse consequuntur rerum nulla fuga ratione, magnam totam officia. Fugit eius corporis voluptatem reprehenderit id recusandae nostrum officia voluptates voluptas ab, assumenda ipsum sed provident odit sunt earum nobis ut eum tempore aperiam ratione ea quae mollitia? Voluptate atque ipsam cupiditate ipsa. Dolores magnam ad corrupti magni iste atque quod excepturi velit obcaecati recusandae! Magnam, quibusdam. Cumque minus laudantium modi reprehenderit quo!"
        ],
        [
         "title" => "Postingan Kedua",
         "slug" => "postingan-kedua",
         "author" => "Ryan Aja",
         "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et excepturi illum, explicabo ducimus rem perferendis, incidunt vel sapiente esse consequuntur rerum nulla fuga ratione, magnam totam officia. Fugit eius corporis voluptatem reprehenderit id recusandae nostrum officia voluptates voluptas ab, assumenda ipsum sed provident odit sunt earum nobis ut eum tempore aperiam ratione ea quae mollitia? Voluptate atque ipsam cupiditate ipsa. Dolores magnam ad corrupti magni iste atque quod excepturi velit obcaecati recusandae! Magnam, quibusdam. Cumque minus laudantium modi reprehenderit quo!"
        ]
     ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


//halaman post single
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
         "title" => "Postingan Pertama",
         "slug" => "postingan-pertama",
         "author" => "Agung Alfatah",
         "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et excepturi illum, explicabo ducimus rem perferendis, incidunt vel sapiente esse consequuntur rerum nulla fuga ratione, magnam totam officia. Fugit eius corporis voluptatem reprehenderit id recusandae nostrum officia voluptates voluptas ab, assumenda ipsum sed provident odit sunt earum nobis ut eum tempore aperiam ratione ea quae mollitia? Voluptate atque ipsam cupiditate ipsa. Dolores magnam ad corrupti magni iste atque quod excepturi velit obcaecati recusandae! Magnam, quibusdam. Cumque minus laudantium modi reprehenderit quo!"
        ],
        [
         "title" => "Postingan Kedua",
         "slug" => "postingan-kedua",
         "author" => "Ryan Aja",
         "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et excepturi illum, explicabo ducimus rem perferendis, incidunt vel sapiente esse consequuntur rerum nulla fuga ratione, magnam totam officia. Fugit eius corporis voluptatem reprehenderit id recusandae nostrum officia voluptates voluptas ab, assumenda ipsum sed provident odit sunt earum nobis ut eum tempore aperiam ratione ea quae mollitia? Voluptate atque ipsam cupiditate ipsa. Dolores magnam ad corrupti magni iste atque quod excepturi velit obcaecati recusandae! Magnam, quibusdam. Cumque minus laudantium modi reprehenderit quo!"
        ]
     ];
     $new_post =[];
     foreach($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
     }


    return view('post', [
        "title" => "Blog",
        "post" => $new_post
    ]);
});


