<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('intro_posts')->insert(
            [
                'description' => 'De Startdag was geweldig! Bedankt om er met ons een feest van te maken!',
                'file_path' => 'files/default-intro.mp4',
            ],
        );
    }
}
