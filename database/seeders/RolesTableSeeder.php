<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 0,
                'name' => 'Администратор',
                'slug' => 'admin',
            ],
            [
                'id' => 1,
                'name' => 'Аббитуриент',
                'slug' => 'entrant',
            ],
            [
                'id' => 2,
                'name' => 'Студент',
                'slug' => 'student',
            ],
            [
                'id' => 3,
                'name' => 'Преподаватель',
                'slug' => 'teather',
            ],
            [
                'id' => 4,
                'name' => 'Секретарь',
                'slug' => 'secretary',
            ],
            [
                'id' => 5,
                'name' => 'Охрана',
                'slug' => 'security',
            ],
        ]);
    }
}
