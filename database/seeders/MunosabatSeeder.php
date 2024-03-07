<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunosabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Munosabat')->insert([
            'title' => '1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'photo_path' =>'images/jpeg.jpg'
        ]);
        DB::table('Munosabat')->insert([
            'title' => '2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'photo_path' =>'images/jpg.jpeg'
        ]);
        DB::table('Munosabat')->insert([
            'title' => '3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'photo_path' =>'images/jpg.png'
        ]);
    }
}
