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
                'slug' => 'judul artikel 2',
                'tittle' => 'judul artikel 2',
                'author' => 'Lisvindanu',
                'body' => 'quos ratione reiciendis repellendus sequi sit veniam veritatis, vitae? Aperiam dolorem dolorum labore nulla provident tempora? Ducimus minima natus quod saepe? Aperiam ea eius illo possimus quos reprehenderit temporibus.
                Accusantium animi corporis dicta excepturi fugiat ipsam nisi sunt velit! Assumenda autem consequatur culpa dolorem doloremque
                dolores eius eum excepturi id ipsam iste minima nesciunt omnis sed, tempora ullam ut velit voluptate. Beatae eius non voluptates'
            ]
        ];
    }

    public static function find($slug): array
    {
//        return Arr::first(static::all(), function ($post) use ($slug) {
//            return $post['slug'] == $slug;
//        });
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);


        if (!$post) {
            abort(404, 'Post not found.');
        }
        return $post;
    }
}


