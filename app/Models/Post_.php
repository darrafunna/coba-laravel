<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Darra Funna",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quasi ducimus dolor. Sit possimus quasi animi laborum qui earum, alias id perferendis voluptate cumque omnis minima quod! Debitis pariatur provident reprehenderit accusamus ea cum possimus voluptas mollitia illum veritatis perferendis alias laborum itaque, asperiores, sed minus perspiciatis sunt fugiat nisi nihil. Tempore natus, omnis suscipit ipsum commodi neque eligendi cumque in consequuntur molestiae? Dolore aspernatur aliquid modi excepturi ratione! Dolores facilis et exercitationem repudiandae asperiores repellendus placeat cum ex deleniti!"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Jane Doe",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem laboriosam rerum qui maiores odit quos nesciunt at ipsum iure voluptatibus fuga facere ipsam officia, alias expedita voluptatem voluptatum ducimus. Reprehenderit exercitationem nisi maxime quaerat fugit nulla cum veritatis. Eligendi vero praesentium laborum alias provident libero, impedit aliquam nobis excepturi debitis perspiciatis sint facilis natus harum ullam dicta soluta, asperiores quam dolorum consequuntur eum quidem ut ipsum molestiae. Commodi corporis facilis incidunt delectus assumenda, esse omnis, non laboriosam possimus, expedita dolores nobis alias provident! Dolore ab exercitationem aut laborum voluptatem natus repellendus eius, repudiandae maxime voluptatum dolorum officiis nostrum suscipit odit."
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
