<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QabuljSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('Qabuljs')->insert([
            'nomer' =>1,
            'sana_vaqti'=>'2024 yil 4 sentabr soat 10-00',
            'qabul_mahalla_nomi' =>'“Bo‘ston” mahallasi',
            'qabul_joyi_nomi' =>'Bo‘ston mahallasidagi 1-sonli maktab binosi'
        ]);
        Db::table('Qabuljs')->insert([
            'nomer' =>2,
            'sana_vaqti'=>'2024 yil 8 sentabr soat 10-00',
            'qabul_mahalla_nomi' =>'“Shermatlar” va “Uchko‘prik” mahallalari',
            'qabul_joyi_nomi' =>'Shermatlar mahallasi binosida'
        ]);
        Db::table('Qabuljs')->insert([
            'nomer' =>3,
            'sana_vaqti'=>'2023 yil 15 sentabr soat 10-00',
            'qabul_mahalla_nomi' =>'	
            “Oq yop” va “Rovot” mahallalari',
            'qabul_joyi_nomi' =>'Oq yop mahallasidagi 10-sonli maktab binosi'
        ]);
        Db::table('Qabuljs')->insert([
            'nomer' =>4,
            'sana_vaqti'=>'2023 yil 22 sentabr soat 10-00',
            'qabul_mahalla_nomi' =>'“Anjirchilar” va “O‘rtado‘rman” mahallalari',
            'qabul_joyi_nomi' =>'“O‘rtado‘rman” mahallasidagi 4-sonli maktab binosi'
        ]);
        Db::table('Qabuljs')->insert([
            'nomer' =>5,
            'sana_vaqti'=>'2023 yil 29 sentabr soat 10-00',
            'qabul_mahalla_nomi' =>'“Yangiobod” mahallasi',
            'qabul_joyi_nomi' =>'“Yangiobod” mahallasi binosi'
        ]);
        Db::table('Qabuljs')->insert([
            'nomer' =>6,
            'sana_vaqti'=>'2023 yil 6 oktabr soat 10-00',
            'qabul_mahalla_nomi' =>'“Arablar” va “Jayxun” mahallalari',
            'qabul_joyi_nomi' =>'Arablar mahallasidagi  32-sonli maktab binosi'
        ]); 
    }
}
