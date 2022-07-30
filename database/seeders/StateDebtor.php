<?php

namespace Database\Seeders;

use App\Models\StatusDebtor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateDebtor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        StatusDebtor::factory()->create([
            'name' => 'Activo',
        ]);

        StatusDebtor::factory()->create([
            'name' => 'Inactivo',
        ]);

        StatusDebtor::factory()->create([
            'name' => 'En espera',
        ]);

    }
}
