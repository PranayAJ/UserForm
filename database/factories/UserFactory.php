<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker()->text(),
            'lastName' => $this->faker()->lastName(),
            'dob' => $this->faker()->dob(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker()->password_hash(), // password
            'address1' => $this->faker()->address1(),
            'address2' => $this->faker()->address2(),
            'state' => $this->faker()->state(),
            'country' => $this->faker()->country(),
            'status' => $this->faker()->status(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
