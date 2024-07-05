<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Condominium;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'condominium_id' => Condominium::inRandomOrder()->first()->id,
            'name' => $this->faker->name($suffix = null),
            'area' => $this->faker->randomElement(['gerencia','administración','supervisión','vigilancia','mantenimiento','jardinería','delegado']),
            'amount' => $this->faker->randomElement(range(1200, 2500, 100)),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'doc_type' => $this->faker->randomElement(['DNI', 'PAS', 'CE', 'PTP']),
            'document' => $this->faker->unique()->numerify('#########'),
            'country' => $this->faker->randomElement(['PE','VE','ARg','COL','CHL','MX','BRA']),
            'address' => $this->faker->address(),
            'cellphone' => $this->faker->unique()->numerify('#######'),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}