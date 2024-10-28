<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

    
        return [
            
            'email' => $this->faker->unique()->email,
            'name' => $this->faker->name,
            'bty' => $this->faker->date,
            'cpf' => $this->faker->companySuffix,
            'rg' => $this->faker->companySuffix,
            'address' => $this->faker->address,
            'cep' => $this->faker->countryCode,
            'phone_numer' => $this->faker->phoneNumber,
           
        ];
    }
}
