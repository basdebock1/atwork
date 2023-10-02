<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('posts')->insert([
            'description' => 'Welkom bij Scouts Sint-Martinus! Kom jij binnenkort met ons mee ravotten?',
            'created_at' => Carbon::now(),
        ]);
        DB::table('media')->insert([
            'media_path' => 'aftermovie startdag 2023.mp4',
            'post_id' => 1,
            'created_at' => Carbon::now(),
        ]);
    }
}
