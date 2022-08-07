<?php

namespace Database\Factories;
use App\Models\Customer;
use App\Models\Invoice;
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
        $type = $this->faker->randomElement(['I','B']);
        $name =$type =='I' ? $this->faker->name() : $this->faker->company();
        return [
        'name'=> $name,
        'type'=> $type,
        'email' => $this->faker->email(),
        'address' => $this->faker->address(),
        'city' => $this->faker->city(),
        'state'=> $this->faker->state(),
        'postal_code' => $this->faker->postCode()

        ];
        
    }
}
