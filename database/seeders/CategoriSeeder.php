<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'categori' => 'Конкурсы/олимпиады',
            ],
            [
                'categori' => 'Спортивные мероприятия',
            ],
            [
                'categori' => 'Другие новости',
            ],
        ]);
    }
}
