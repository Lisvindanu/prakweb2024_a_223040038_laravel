<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Learn Kotlin Fundamentals',
            'slug' => 'learn-kotlin-fundamentals',
            'color' => 'purple'
        ]);  Category::create([
            'name' => 'Learn Java Fundamentals',
            'slug' => 'learn-Java-fundamentals',
            'color' => 'orange'

        ]);  Category::create([
            'name' => 'Learn Kotlin OOP',
            'slug' => 'learn-kotlin-OOP',
           'color' => 'blue'
        ]);  Category::create([
            'name' => 'Learn Kotlin KTOR',
            'slug' => 'learn-kotlin-KTOR',
             'color' => 'red'
        ]);  Category::create([
            'name' => 'Learn Java Spring Framework',
            'slug' => 'learn-Java-Spring-Framework',
             'color' => 'green'
        ]);
    }
}
