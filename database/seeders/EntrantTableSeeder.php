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
                'vkontakte' => 'https://vk.com/id29923814',
                'phone' => '+7(910)342-31-44',                
            ],
            [
                'user_id' => 3,
                'vkontakte' => 'https://vk.com/vanish',
                'phone' => '+7(990)677-69-42',                
            ],
            [
                'user_id' => 4,
                'vkontakte' => 'https://vk.com/mellchel',
                'phone' => '+7(950)890-80-44',                
            ],
            [
                'user_id' => 5,
                'vkontakte' => 'https://vk.com/g.black',
                'phone' => '+7(880)740-18-31',                
            ],
            [
                'user_id' => 6,
                'vkontakte' => 'https://vk.com/k_sad_k',
                'phone' => '+7(800)930-77-88',                
            ],
            [
                'user_id' => 7,
                'vkontakte' => 'https://vk.com/s.superb',
                'phone' => '+7(930)742-43-54',                
            ],
            [
                'user_id' => 8,
                'vkontakte' => 'https://vk.com/bugbud',
                'phone' => '+7(960)321-34-42',                
            ],
            [
                'user_id' => 9,
                'vkontakte' => 'https://vk.com/silarus',
                'phone' => '+7(990)372-31-22',                
            ],
            [
                'user_id' => 10,
                'vkontakte' => 'https://vk.com/m.asu',
                'phone' => '+7(970)753-23-53',                
            ],
            [
                'user_id' => 11,
                'vkontakte' => 'https://vk.com/obusbobus',
                'phone' => '+7(930)842-42-42',                
            ],
            [
                'user_id' => 12,
                'vkontakte' => 'https://vk.com/aboba',
                'phone' => '+7(977)984-32-99',                
            ],
            [
                'user_id' => 13,
                'vkontakte' => 'https://vk.com/bobka22',
                'phone' => '+7(932)744-24-40',                
            ],
            [
                'user_id' => 14,
                'vkontakte' => 'https://vk.com/sus',
                'phone' => '+7(950)752-43-75',                
            ],
            [
                'user_id' => 15,
                'vkontakte' => 'https://vk.com/s.negr',
                'phone' => '+7(933)376-05-33',                
            ],
            [
                'user_id' => 16,
                'vkontakte' => 'https://vk.com/ploskiy',
                'phone' => '+7(988)625-64-85',                
            ],
        ]);
    }
}
