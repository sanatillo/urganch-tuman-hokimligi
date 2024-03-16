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
        DB::table('Munosabats')->insert([
            'title' => 'Munosabat 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'photo_path' =>'images/jpeg.jpg'
        ]);
        DB::table('Munosabats')->insert([
            'title' => 'Munosabat 2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'photo_path' =>'images/jpg.jpeg'
        ]);
        DB::table('Munosabats')->insert([
            'title' => 'Munosabat 3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a nostrum alias repellendus. Doloremque labore tempora hic vitae magnam commodi?',
            'photo_path' =>'images/jpg.png'
        ]);
    }
}
