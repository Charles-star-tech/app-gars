<?php

namespace Database\Factories;

use App\Models\Courier;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourierFactory extends Factory
{
    /**
     * Define the model's default state.
     *@var string
     */
     protected $model = Courier::class;
      
     /** 
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => rand(1,10),
            "destination_id" => rand(1,10),
            "natureClie" => $this->faker->text($max = 20)
        ];
    }
}
