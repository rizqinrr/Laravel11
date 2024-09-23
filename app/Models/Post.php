<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Rizqi Nurrahman',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur error voluptas,
                necessitatibus deleniti
                veritatis aspernatur facere assumenda nesciunt impedit odio incidunt. Optio at fugiat natus voluptas ea
                error eveniet consectetur.'
      ],
      [
        'id' => 2,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Rizqi Nurrahman',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, fuga aliquid
                eum eligendi libero possimus at? Ea, possimus? Illo qui sit deleniti enim expedita molestiae, rerum quaerat
                laborum repellendus quasi.'
      ]
    ];
  }

  public static function find($slug)
  {
    // return Arr::first(static::all(), function ($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    //jika menggunakan aero function
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    if(!$post) {abort(404);} //jika page yang dicari tidak ada, maka tampilkan error 404
    return $post;
  }
}
