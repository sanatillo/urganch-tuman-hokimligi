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
            'ismi_sharifi' => 'Sultanov G\'ayratjon Po\'latovich',
            'hodim_malumotlari' => '1980 yil,
             Xorazm viloyati,
             Shovot tumani,
             o\'zbek
             Oliy, 2006 yil. Toshkent davlat yuridik instituti huquushunos',
            'kasbi' => 'Urganch tuman hokimi',
            'photo_path' => '\assets\img\Urganch_tuman_hokimi.jpg',
            'telnumber' => '+99545145221',
            'masuliyati' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi soluta eligendi, nostrum saepe iure ad itaque. Maiores, unde? Ipsam dolores error at distinctio omnis assumenda. Repellat eius hic delectus aspernatur!',
            'email' => 'sultanoygayrat@gmail.com'
        ]);
        DB::table('Apparats')->insert([
            'ismi_sharifi' => 'Madraimov Po\'latbek Davronbekovich',
            'hodim_malumotlari' => '1987 yil,
             Xorazm viloyati,
             Urganch shahri,
             o\'zbek
             Oliy, 2011 yil. Toshkent moliya instituti iqtisodchi',
            'kasbi' => 'Urganch tuman iqtisodiy taraqqiyot va kambag\'allashtirishni qisqartirish bo\'lim boshlig\'i',
            'photo_path' => '\assets\img\1679582944.png',
            'telnumber' => '+99545148980',
            'masuliyati' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi soluta eligendi, nostrum saepe iure ad itaque. Maiores, unde? Ipsam dolores error at distinctio omnis assumenda. Repellat eius hic delectus aspernatur!',
            'email' => 'madariovpolat@gmail.com'
        ]);
    }
}
