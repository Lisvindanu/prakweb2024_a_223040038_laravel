<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

//
//        Category::create([
//           'name' => 'Learn Kotlin',
//           'slug' => Str::slug('Learn Kotlin'),
//        ]);
//
//        Post::create([
//           'tittle' => 'Judul Artikel 1',
//           'slug' => Str::slug('Judul Artikel 1'),
//           'author_id' => 1,
//           'category_id' => 1,
//           'body' => 'In Kotlin, objects allow you to define a class and create an instance of it in a single step. This is useful when you need either a reusable singleton instance or a one-time object. To handle these scenarios, Kotlin provides two key approaches: object declarations for creating singletons and object expressions for creating anonymous, one-time objects.
//
//A singleton ensures that a class has only one instance and provides a global point of access to it.
//
//Object declarations and object expressions are best used for scenarios when:
//
//Using singletons for shared resources: You need to ensure that only one instance of a class exists throughout the application. For example, managing a database connection pool.
//
//Creating factory methods: You need a convenient way to create instances efficiently. Companion objects allow you to define class-level functions and properties tied to a class, simplifying the creation and management of these instances.
//
//Modifying existing class behavior temporarily: You want to modify the behavior of an existing class without the need to create a new subclass. For example, adding temporary functionality to an object for a specific operation.
//
//Type-safe design is required: You require one-time implementations of interfaces or abstract classes using object expressions. This can be useful for scenarios like a button click handler.'
//        ]);
    $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();

    }
}
