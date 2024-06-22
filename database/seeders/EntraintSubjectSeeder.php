<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntraintSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entraint_subjects')->insert([
            [
                'entrant_id' => '2',
                'subject_id' => '1',
                'ocenka' => '4',
            ],
            [
                'entrant_id' => '2',
                'subject_id' => '2',
                'ocenka' => '5',
            ],
            [
                'entrant_id' => '2',
                'subject_id' => '3',
                'ocenka' => '4',
            ],
            [
                'entrant_id' => '2',
                'subject_id' => '4',
                'ocenka' => '4',
            ],
            [
                'entrant_id' => '2',
                'subject_id' => '5',
                'ocenka' => '5',
            ],
            [
                'entrant_id' => '2',
                'subject_id' => '6',
                'ocenka' => '5',
            ],
            [
                'entrant_id' => '2',
                'subject_id' => '7',
                'ocenka' => '5',
            ],
            [
                'entrant_id' => '2',
                'subject_id' => '8',
                'ocenka' => '5',
            ],
        ]);
    }
}
