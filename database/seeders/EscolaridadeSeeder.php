<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolaridadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escolaridades')->insert([
            ['nome' => 'Fundamental Completo'],
            ['nome' => 'Médio Incompleto'],
            ['nome' => 'Médio Completo'],
            ['nome' => 'Superior Incompleto'],
            ['nome' => 'Superior Completo'],
            ['nome' => 'Mestrado'],
            ['nome' => 'Doutorado'],
        ]);
    }
}
