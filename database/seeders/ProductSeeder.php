<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            'name'=> 'Computer',
            'category'=>'computer',
            'price'=>'12.99',
            'image'=> 'https://www.pexels.com/photo/retro-tv-on-river-shore-near-forest-3764958/',
            'description'=> 'A new TV has been released'
        ]);
    }
}
