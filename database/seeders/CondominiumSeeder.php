<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condominium;

class CondominiumSeeder extends Seeder
{
    public function run()
    {
        Condominium::factory()->count(3)->create();
    }
}