<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
  }

  // public static function find($slug)
  // {
  //   return Arr::first(static::all(), function ($post) use ($slug) {
  //     return $post['slug'] == $slug;
  //     /*
  //       mau pake self:: atau static:: fungsinya sama aja
  //       tapi kalo kata gemini penggunaan self:: lebi baik
  //     */
  //   });
  // }
  public static function find($slug): array /* : array buat ngembaliin return type. pelajarin lebi lanjut*/
  {
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    // pake arrow function, di js juga ada

    if (!$post) {
      abort(404);
    }

    return $post;
  }
}