<?php

namespace Database\Factories;

use App\Models\Sku;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'size'  => $this->faker->randomDigit(9),
            'color' => $this->faker->safeColorName(),
            'price' => $this->faker->randomFloat(2, 10, 20),
            'stock' => $this->faker->numberBetween(0, 100) 
        ];
    }
}
