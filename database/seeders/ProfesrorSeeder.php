<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor;


class ProfesrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesor::factory(20)->create();
    }
}
