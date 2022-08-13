<?php

namespace Database\Factories;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'sku' => $this->faker->ean13(),
            'price' => '1200.00',
            'description' => $this->faker->text($maxNbChars = 500),
            'key_features' => $this->faker->text($maxNbChars = 1000),
            'warranty' => 2,
            'height' => 123,
            'width' => 123,
            'depth' => 123,
        ];
    }
}
