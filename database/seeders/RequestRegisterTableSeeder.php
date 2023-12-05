<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RequestRegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('request_registers')->insert([
            [                
                'fio' => 'Ласкин Виталий Олегович',
                'phone' => '+7(921)234-34-56',
            ],
            [
                'fio' => 'Семячкин Александр Иванович',
                'phone' => '+7(921)234-34-64',
            ],
            [
                'fio' => 'Асобаев Дмитрий Сергеевич',
                'phone' => '+7(921)237-34-56',
            ],
            [
                'fio' => 'Лукьянов Игорь Петрович',
                'phone' => '+7(921)234-35-56',
            ],
            [
                'fio' => 'Зубарев Владислав Андреевич',
                'phone' => '+7(946)234-34-56',
            ],
            [
                'fio' => 'Рожков Дмитрий Алексеевич',
                'phone' => '+7(945)234-34-56',
            ],
        ]);
    }
}
