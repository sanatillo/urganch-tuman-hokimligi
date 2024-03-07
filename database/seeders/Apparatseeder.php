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
            'fullname' => 'Allakuliyev Abdusharip Bekzod o\'gli',
            'job' => 'Tuman hokimligi tashkiliy-kadrlar guruhi Nizomi',
            'telnumber' => '+99545145221',
            'email' => 'allakuliyev@gmail.com',
            'responsibility' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi soluta eligendi, nostrum saepe iure ad itaque. Maiores, unde? Ipsam dolores error at distinctio omnis assumenda. Repellat eius hic delectus aspernatur!'
        ]);
    }
}
