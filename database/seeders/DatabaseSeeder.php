<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $this->call(Apparatseeder::class);        
    $this->call(PostSeeder::class);        
    $this->call(QabuljSeeder::class);     
    $this->call(AloqalariSeeder::class);  
    $this->call(MunosabatSeeder::class); 
    $this->call(QilIshlarSeeder::class);//
    }
}
