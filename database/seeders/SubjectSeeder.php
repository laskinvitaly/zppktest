<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            [
                'subject_name' => 'Алгебра',
            ],
            [
                'subject_name' => 'Геометрия',
            ],
            [
                'subject_name' => 'Русский язык',
            ],
            [
                'subject_name' => 'Литература',
            ],
            [
                'subject_name' => 'История',
            ],
            [
                'subject_name' => 'Обществознание',
            ],
            [
                'subject_name' => 'География',
            ],
            [
                'subject_name' => 'Физическая культура',
            ],
        ]);
    }
}
