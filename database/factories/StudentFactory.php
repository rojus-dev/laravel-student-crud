<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\Grupe;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'asmens_kodas' => '39001010005',
            'gim_data' => $this->faker->date(),
            'address' => $this->faker->address,
            'phone' => '+37061234567',
            'city_id' => City::inRandomOrder()->first()->id ?? 1,
            'grupe_id' => Grupe::inRandomOrder()->first()->id ?? 1,
            
        ];
    }
}