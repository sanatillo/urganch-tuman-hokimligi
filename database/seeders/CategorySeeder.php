<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'siyosiy',
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'ijtimoiy'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'salomatlik'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'ekologiya'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'biznes'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'statistika'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'iqtisodiy'
        ]);
    }
}
