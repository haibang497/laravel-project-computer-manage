<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComputerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Computer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productname' => $this->faker->name,
            'brand'=>$this->faker->name,
            'price'=>rand(0, 999),
            'dayGet'=>now(),
            'image'=>null,
            'category_id'=>Category::all()->random()->id
        ];
    }
}
