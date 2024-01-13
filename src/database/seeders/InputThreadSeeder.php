<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class InputThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specificDateTime = Carbon::create(rand(2018,2023), rand(1,12), rand(1,29), rand(1,23), rand(0,50), 0); 
        DB::table('threads')->truncate();

        for ($i = 1; $i <= 300; $i++) {

            DB::table('threads')->insert([
                'comment' => 'Your Comment ' . $i,
                'date_and_time' => Carbon::create(rand(2018,2023), rand(1,12), rand(1,29), rand(1,23), rand(0,50), 0),
                'thread_title' => 'Thread Title ' . $i,
            ]);
        }
    }
}
