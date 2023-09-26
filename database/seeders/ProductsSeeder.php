<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Alfreds Futterkiste',
                'merchant_id' => 1,
                'price' => '100', // Consider storing as integer or decimal
                'status' => 'Available',
                'created_at'=> Carbon::now(),
            ],
            [
                'name' => 'Centro comerical Moctezuma',
                'merchant_id' => 1,
                'price' => '120.96', // Consider storing as integer or decimal
                'status' => 'Available',
                'created_at'=> Carbon::now(),
            ],
        ]);
    }
}
