<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Apparatseeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('Apparats')->insert([
            'ismi' => 'Allakuliyev Abdusharip Bekzod o\'gli',
            'kasbi' => 'Tuman hokimligi tashkiliy-kadrlar guruhi Nizomi',
            'photo_path' => '+/image.jpg',
            'telnumber' => '+99545145221',
            'masuliyati' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi soluta eligendi, nostrum saepe iure ad itaque. Maiores, unde? Ipsam dolores error at distinctio omnis assumenda. Repellat eius hic delectus aspernatur!',
            'email' => 'allakuliyev@gmail.com'
        ]);
        DB::table('Apparats')->insert([
            'ismi' => 'Umarov Xushnud Bunyod o\'gli',
            'kasbi' => 'Tuman hokimining qishloq va suv xo‘jaligi masalalari bo‘yicha o‘rinbosari.',
            'photo_path' => '+/image.jpg',
            'telnumber' => '+998654321215',
            'masuliyati' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi soluta eligendi, nostrum saepe iure ad itaque. Maiores, unde? Ipsam dolores error at distinctio omnis assumenda. Repellat eius hic delectus aspernatur!',
            'email' => 'umarovxushnud@gmail.com',
        ]);
    }
}
