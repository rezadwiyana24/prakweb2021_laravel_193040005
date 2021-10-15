<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [

        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reza Dwiyana",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime corrupti, praesentium iste unde magni quidem? Earum fugiat eos sint voluptatum consequatur natus, veritatis, ab adipisci, rem labore deserunt modi alias distinctio officiis voluptate at aliquam tempore sunt dignissimos molestias eveniet commodi quaerat aspernatur. Iste porro odit odio ad distinctio dolorem maiores sed dolores atque rerum repellendus iure voluptate dignissimos quia, molestias, modi, error ullam unde placeat quam praesentium? Consectetur optio repellendus enim delectus accusamus sequi in officiis itaque. Repellat, minus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ferdian Eka",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nobis ab, labore maiores blanditiis impedit quaerat quis! Reiciendis eligendi non omnis illo iusto animi corrupti sapiente, doloribus reprehenderit nesciunt iure ex vero quisquam tempora. Vero et minus magnam omnis optio nemo dolor modi debitis officiis eaque libero magni, doloremque soluta eos. Molestiae quam vitae ex, id qui blanditiis atque temporibus nostrum dicta magni commodi laboriosam nobis eaque quasi magnam eveniet perspiciatis optio ullam! Facilis praesentium amet quas quae, deserunt neque eius reprehenderit natus est unde corporis, voluptatibus temporibus eaque at quasi ut vitae odio debitis nostrum repudiandae perferendis eum delectus."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        //$post = [];
        //foreach($posts as $p) {
        //    if($p["slug"] === $slug) {
        //    $post = $p;
        //    }
        // }

        return $posts->firstWhere('slug', $slug);
    }

}
