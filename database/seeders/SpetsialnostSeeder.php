<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SpetsialnostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spetsialnosts')->insert([
            [
                'spets_number' => '44.02.01',
                'spets_name' => 'Дошкольное образование',
            ],
            [
                'spets_number' => '44.02.02',
                'spets_name' => 'Преподавание в начальных классах',
            ],
            [
                'spets_number' => '44.02.05',
                'spets_name' => 'Коррекционная педагогика в начальном образовании',
            ],
            [
                'spets_number' => '49.02.01',
                'spets_name' => 'Физическая культура',
            ],
            [
                'spets_number' => '09.02.07',
                'spets_name' => 'Информационные системы и программирование',
            ],
            [
                'spets_number' => '35.02.03',
                'spets_name' => 'Технология деревообработки',
            ],
        ]);
    }
}
