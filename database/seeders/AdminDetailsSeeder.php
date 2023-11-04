<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'best4utourism',
            'password' => bcrypt('b4u@admin#tourism'),
            'isAdmin' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
