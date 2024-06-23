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
                'number' => '44.02.01',
                'name' => 'Дошкольное образование',
            ],
            [
                'number' => '44.02.02',
                'name' => 'Преподавание в начальных классах',
            ],
            [
                'number' => '44.02.05',
                'name' => 'Коррекционная педагогика в начальном образовании',
            ],
            [
                'number' => '49.02.01',
                'name' => 'Физическая культура',
            ],
            [
                'number' => '09.02.07',
                'name' => 'Информационные системы и программирование',
            ],
            [
                'number' => '35.02.03',
                'name' => 'Технология деревообработки',
            ],
        ]);
    }
}
