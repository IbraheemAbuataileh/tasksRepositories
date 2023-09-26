<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createdAt = Carbon::now();
        $dayOfWeek = $createdAt->dayOfWeek;
        DB::table('orders')->insert([
            [
                'user_id' => '1',
                'status' => 'Available',
                'day' => $dayOfWeek,
                'created_at'=> Carbon::now(),
                 
            ],
        ]);
    }
}
