<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->word,
            'categories_id' => 1,
            'list_price' => array_rand(range(0,25)),
            'quantity' => array_rand(range(0,25)),
            'slug' => Str::slug($this->faker->word),
        ];
    }
}
