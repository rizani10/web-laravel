<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Category::create([
           'name' => 'Web Development',
              'slug' => 'web-development'
       ]);

       Category::create([
           'name' => 'Web Design',
              'slug' => 'web-design'
       ]);

       Category::create([
           'name' => 'Programming',
              'slug' => 'programming'
       ]);

       Posts::factory(20)->create();
    }
}
