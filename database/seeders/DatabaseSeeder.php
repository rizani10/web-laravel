<?php

namespace Database\Seeders;

use App\Models\Categories;
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
       Categories::factory(10)->create();

       Posts::factory(20)->create();
    }
}
