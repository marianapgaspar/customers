<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->email(),
            'gender'=>'',
            'ip_address'=>fake()->numerify("######"),
            'company'=>fake()->company(),
            'city'=>fake()->city(),
            'title'=>fake()->title(),
            'website'=>'wwww.google.com'
        ];
    }
}
