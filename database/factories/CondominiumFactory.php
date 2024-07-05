<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Condominium;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CondominiumFactory extends Factory
{
    protected $model = Condominium::class;

    public function definition()
    {
        $userIds = User::pluck('id')->toArray();
        
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'name' => $this->faker->company,
            'location' => $this->faker->address,
            'employees' => $this->faker->numberBetween(5, 100),
            'incomes' => $this->faker->randomFloat(2, 10000, 1000000),
            'expenses' => $this->faker->randomFloat(2, 5000, 500000),
            'utility' => $this->faker->randomFloat(2, 1000, 100000),
        ];
    }
}