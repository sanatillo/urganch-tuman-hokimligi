<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AloqalariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Aloqalaris')->insert([
            'title' => 'Aloqa 1 Lorem ipsum, dolort fugiat totam labore impedit et?',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'photo_path' => 'image/ramla.png'
        ]);
        DB::table('Aloqalaris')->insert([
            'title' => 'Aloqa 2 Lorem laborum labore impedit et?',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'photo_path' => 'image/ramla.png'
        ]);
        DB::table('Aloqalaris')->insert([
            'title' => 'Aloqa 3 Lorem laborum necessitatibus magni enim  labore impedit et?',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'photo_path' => 'image/ramla.png'
        ]);
        DB::table('Aloqalaris')->insert([
            'title' => 'Aloqa 4 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'photo_path' => 'image/rasmla.png'
        ]);
        DB::table('Aloqalaris')->insert([
            'title' => 'Aloqa 5 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'photo_path' => 'image/ramla.png'
        ]);
        DB::table('Aloqalaris')->insert([
            'title' => 'Aloqa 6 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laborum necessitatibus magni enim reiciendis velit fugiat totam labore impedit et?',
            'photo_path' => 'image/ramla.png'
        ]);
    }
}
