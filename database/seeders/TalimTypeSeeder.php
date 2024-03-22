<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TalimTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('talim_types')->insert([
            'name' => 'Maktabgacha ta\'lim',
        ]);
        DB::table('talim_types')->insert([
            'name' => 'Umumiy o\'rta talim maktablar'
        ]);
        DB::table('talim_types')->insert([
            'name' => 'Kasb-hunar kollejlari'
        ]);
        DB::table('talim_types')->insert([
            'name' => 'Oliy ta\'lim muassasalari'
        ]);
    }
}
