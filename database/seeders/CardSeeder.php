<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 21; $i++)
            for ($a = 0; $a < 2; $a++) {
                DB::table('cards')->insert([
                    'name' => Str::random(8),
                    'desk_list_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }
    }
}
