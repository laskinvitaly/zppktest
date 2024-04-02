<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entrants')->insert([
            [
                'user_id' => 1,
                'vkontakte' => 'https://vk.com/s.suuen',
                'phone' => '+7(945)234-34-56',                
            ],
            [
                'user_id' => 2,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 3,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 4,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 5,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 6,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 7,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 8,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 9,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 10,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 11,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 12,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 13,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 14,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 15,
                'vkontakte' => '',
                'phone' => '',                
            ],
            [
                'user_id' => 16,
                'vkontakte' => '',
                'phone' => '',                
            ],
        ]);
    }
}
