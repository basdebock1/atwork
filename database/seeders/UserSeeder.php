<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Bas De Bock',
            'email' => 'bas.debock@hotmail.com',
            'password' => bcrypt('soutsnk2770'),
            'created_at' => Carbon::now(),
        ]);
    }
}
