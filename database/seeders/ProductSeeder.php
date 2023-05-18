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
            'name'=> 'New Mobile',
            'category'=>'Mobile',
            'price'=>'12.99',
            'image'=> 'https://www.pexels.com/photo/silver-samsung-smartphone-47261/',
            'description'=> 'A new mobile has been released'
        ]);
    }
}
