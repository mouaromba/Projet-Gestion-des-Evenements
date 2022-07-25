<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            $factory->define(User::class, function (Faker $faker) {
                return [
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'email_verified_at' => now(),
                    'password' => 'secreet_password', // secret
                    'remember_token' => str_random(10),
                ];
            });
    }
}
