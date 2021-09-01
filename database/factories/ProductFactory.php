<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->randomElement(['Shirt', 'Pants', 'Boots', 'Skirt', 'Dress', 'Hat', 'Purse']),
            'code' => rand(100,5000),
            'price' => $this->faker->randomElement(['100', '150', '120', '250', '300', '50']),
            'availability' => rand(1,500),
        ];
    }
}
