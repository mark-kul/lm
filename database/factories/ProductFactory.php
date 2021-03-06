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
            'name' => $this->faker->name,
            'price'  => $this->faker->randomNumber(2),
            'units' => $this->faker->randomNumber(2),
            'description'  => $this->faker->sentence(6),
            'image' => '/images/700x400.png'
        ];
    }
}
