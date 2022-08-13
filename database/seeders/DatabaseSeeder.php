<?php

namespace Database\Seeders;

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
        // \App\Models\Availability::factory(5)->create();
        // \App\Models\Category::factory(4)->create();
        // \App\Models\Brand::factory(11)->create();
        // \App\Models\Capacity::factory(9)->create();
        // \App\Models\Style::factory(2)->create();
        // \App\Models\Product::factory(30)->create();
    
    $this->call(ProductSeeder::class);
    }
}
