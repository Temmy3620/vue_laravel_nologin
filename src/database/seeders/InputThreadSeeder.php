<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InputThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('threads')->insert([
                'comment' => 'Your Comment ' . $i,
                'date_and_time' => now(),
                'thread_title' => 'Thread Title ' . $i,
            ]);
        }
    }
}
