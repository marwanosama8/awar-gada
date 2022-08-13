<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $items = Product::all();
        // foreach ($items as $item ) {
        //     $url = "https://st2.depositphotos.com/1000128/5298/i/950/depositphotos_52982327-stock-photo-smart-tv.jpg";
        //     $item->addMediaFromUrl($url)->toMediaCollection();
        // }

        $items = Product::all()->map(function($query){
            $query->update([
                'availability_id' => 1,
            ]);
        });
    }
}
