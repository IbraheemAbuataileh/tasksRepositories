<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MerchantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('merchants')->insert([
            [
                'merchant_name' => 'Germany',
                'admin_id' => '1',
                'created_at'=> Carbon::now(),
                 
            ],
            [
                'merchant_name' => 'Mexico',
                'admin_id' => '1',
                'created_at'=> Carbon::now(),
            ],
        ]);
    }
}

