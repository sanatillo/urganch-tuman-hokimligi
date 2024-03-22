<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TadbirTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tadbir_types')->insert([
            'name' => 'Elektron hukumat doirasida qilinayotgan ishlar'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'Hokimlik ishtirokidagi tadbirlar'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'Kun tartibi ish rejasi va yig\'ilish masalalari'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'Xorijiy hamkorlik aloqalari'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'Boshqa davlat organlari bilan o\'zaro munosabat'
        ]);
        DB::table('tadbir_types')->insert([
            'name' => 'Rasmiy maruzalar'
        ]);
    }
}
