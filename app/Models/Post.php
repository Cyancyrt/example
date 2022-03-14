<?php

namespace App\Models;


class post
{
    static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "saya",
            "isi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos possimus voluptatem suscipit distinctio, error recusandae labore alias dolorum tenetur asperiores sunt. Quasi sunt exercitationem hic voluptate. Accusamus beatae itaque, quos maiores unde atque quae est minus consequuntur pariatur eius!"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "saya juga",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ipsum, voluptatibus blanditiis earum numquam consequuntur rem non delectus harum animi, recusandae ipsa vero magni possimus dolorum. Fugiat, quasi. Distinctio ex, fugit architecto dicta, voluptatum temporibus unde corrupti numquam quae impedit laudantium quod minima aperiam repellat."
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
