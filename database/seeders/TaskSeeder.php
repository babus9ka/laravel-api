<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 26; $i < 41; $i++)
            for ($a = 0; $a < 2; $a++) {
                DB::table('tasks')->insert([
                    'name' => Str::random(8),
                    'card_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }
    }
}
