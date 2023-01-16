<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // HARD CODED SEEDER.
        
         DB::table('categories')->insert([
            'name' => 'romans',
            'description' => 'dit zijn romans boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'thrillers',
            'description' => 'famous thrillers books',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Childeren books',
            'description' => 'famous childeren books',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'romansliterature',
            'description' => 'famous romans literature books',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Cook books',
            'description' => 'Famous Cook books',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'fantasy',
            'description' => 'famous fantasy books',
            'image' => '',
        ]);
        
    }
}
