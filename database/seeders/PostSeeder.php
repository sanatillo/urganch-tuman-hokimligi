<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Posts')->insert([
            'title' =>  'Хоразм_вилоятининг_ижтимоий-иқтисодий_ҳолати_рақамларда',
            'content' => '📊 Статистика агентлигининг дастлабки маълумотларига кўра, 2023 йилда Хоразм вилоятининг ижтимоий-иқтисодий ҳолати рақамларда: 

            🔹 ялпи ҳудудий маҳсулот ҳажми – 36,9 трлн сўм
            
            🔹ишлаб чиқарилган саноат маҳсулотлари ҳажми – 21,2 трлн сўм
            
            🔹 бажарилган қурилиш ишлари ҳажми – 5,7 трлн сўм
            
            🔹 асосий капиталга ўзлаштирилган инвестициялар ҳажми – 12,1 трлн сўм
            
            🔹 кўрсатилган бозор хизматлари ҳажми – 13,3 трлн сўм
             
            🔹 чакана савдо товар айланмаси ҳажми – 13,4 трлн сўм
            
            🔹 ташқи савдо айланмаси ҳажми – 871,7 млн АҚШ доллари
            
            🔹 қишлоқ, ўрмон ва балиқчилик хўжалиги маҳсулотларининг ҳажми – 27,8 трлн сўм
            
            🔹янги ташкил этилган корхона ва ташкилотлар сони – 6 457 та
            
            🔹доимий аҳолиси сони (2024 йил 1 январь ҳолатига) – 1 995,6 минг киши',
            'short_content' => '📊 Статистика агентлигининг дастлабки маълумотларига кўра, 2023 йилда Хоразм вилоятининг ижтимоий-иқтисодий ҳолати рақамларда: ',
            'views_count'=>121,
            'photo_path'=>'/image.jpg'
        ]);
        DB::table('Posts')->insert([
            'title' =>  'Urganch_tumanida_bajarilgan_qurilish_ishlari',
            'content' => '📊  2023- yilning yanvar-dekabr oylarida Urganch tumanida  650,9 mlrd so‘mlik qurilish ishlari amalga oshirilgan.
                Iqtisodiy faoliyat  turiga ko‘ra tumanda bajarilgan qurilish ishlarining tarkibi:
                bino va inshootlar qurilishi – 408,2 mlrd so‘m
                fuqarolik obyektlari qurilishi – 208,8 mlrd so‘m
                ixtisoslashtirilgan qurilish ishlari – 33,9 mlrd so‘m.
                Jami qurilish ishlarining 51,9 %i (338,1 mlrd so‘mi) kichik korxona va mikrofirmalar hissasiga to‘g‘ri kelgan.',
            'short_content' => '📊  2023- yilning yanvar-dekabr oylarida Urganch tumanida  650,9 mlrd so‘mlik qurilish ishlari amalga oshirilgan.',
            'views_count'=>144,
            'photo_path'=>'/image.jpg'
        ]);
        DB::table('Posts')->insert([
            'title' =>  'Xorazm_viloyatida_qishloq,_o‘rmon_va_baliqchilik_xo‘jaligida_qancha_qo‘shilgan_qiymat_yaratildi?',
            'content' => 'Xorazm viloyatida qishloq, o‘rmon va baliqchilik xo‘jaligida qancha qo‘shilgan qiymat yaratildi?

            📊 2023- yil yakunlariga ko‘ra, Xorazm viloyati bo‘yicha qishloq, o‘rmon va baliqchilik xo‘jaligida yaratilgan yalpi qo‘shilgan qiymat hajmi 16 252,2 mlrd so‘mni tashkil etdi va 2022- yilga nisbatan 4,0 % ga o‘sdi.',
            'short_content' => '📊  2023- yil yakunlariga ko‘ra, Xorazm viloyati bo‘yicha qishloq, o‘rmon va baliqchilik xo‘jaligida ',
            'views_count'=>91,
            'photo_path'=>'/image.jpg'
        ]);
        DB::table('Posts')->insert([
            'title' =>  'Eng_faol_ijtimoiy_ko\'rik tanlovi_tashkil_etiladi',
            'content' => '🖋 Vazirlar Mahkamasining 2024-yil 3-fevraldagi qaroriga muvofiq, “Eng faol ijtimoiy xodim” ko‘rik-tanlovini tashkil etish chora-tadbirlari to‘g‘risida”gi nizom qabul qilindi.  

            🥹 Mazkur tanlovni o‘tkazishgan ko‘zlangan asosiy maqsad - Ijtimoiy himoya milliy agentligi tizimi hamda nodavlat-notijorat tashkilotlardagi ijtimoiy xodimlar, ijtimoiy xodim assistentlari ongida “Ijtimoiy himoyaga muxtoj aholiga sifatli ijtimoiy xizmat va yordam ko‘rsatish-oliy burchimiz!” konseptual g‘oyasini mustahkamlashdan iborat.  
            
            Ko‘rik-tanlov haqidagi batafsil ma’lumot bilan bu yerda (https://lex.uz/uz/docs/-6789178) tanishishingiz mumkin.',
            'short_content' => '🖋 Vazirlar Mahkamasining 2024-yil 3-fevraldagi qaroriga muvofiq, “Eng faol ijtimoiy xodim” ko‘rik-tanlovini tashkil etish chora-tadbirlari to‘g‘risida”gi nizom qabul qilindi.  ',
            'views_count'=>110,
            'photo_path'=>'/image.jpg'
        ]);
        DB::table('Posts')->insert([
            'title' =>  'Urganch_tumanida_qancha_hajmdagi_chorvachilik_mahsulotlari_ishlab_chiqarilgan?',
            'content' => '📊 2023- yilning yanvar-dekabr oylarida Urganch tumanida  hajmi 1 658.3 mlrd so‘mlik chorvachilik mahsulotlari ishlab chiqarildi va 2022- yilning mos davriga nisbatan o‘sish  1,3 % ni tashkil etdi.
                Chorvachilik mahsulotlari ishlab chiqarish viloyat  umumiy hajmida tumanning ulushi  11,5 %ni tashkil qildi.
                Tumanda ishlab chiqarilgan chorvachilik mahsulotlari tarkibi:
                go‘sht (tirik vaznda) – 19,8 ming tonna
                sut – 135,0 ming tonna
                tuxum – 76,4 mln dona
                ovlangan baliq – 924 tonna.',
            'short_content' => '📊 2023- yilning yanvar-dekabr oylarida Urganch tumanida  hajmi 1 658.3 mlrd so‘mlik chorvachilik mahsulotlari ishlab chiqarildi ',
            'views_count'=>101,
            'photo_path'=>'/image.jpg'
        ]);
        DB::table('Posts')->insert([
            'title' =>  'Urganch_tumanida_qancha_hajmdagi_xorijiy_investitsiya_o‘zlashtirildi?',
            'content' => '📊  2023- yilning  yanvar-dekabr oylarida Urganch tumanida asosiy kapitalga 1 445,0 mlrd so‘mlik investitsiya o‘zlashtirilgan bo‘lib, shundan 65,2 %i yoki 941,7 mlrd so‘mini to‘g‘ridan-to‘g‘ri xorijiy investitsiya va kafolatlanmagan kreditlar tashkil qilgan.
                Shu turdagi investitsiyalarning tarkibida to‘g‘ridan-to‘g‘ri xorijiy investitsiyalar hajmi 120,0 mlrd so‘mni, kafolatlanmagan kreditlar 818,7 mlrd so‘mni tashkil etgan.',
            'short_content' => '📊  2023- yilning  yanvar-dekabr oylarida Urganch tumanida asosiy kapitalga 1 445,0 mlrd so‘mlik investitsiya o‘zlashtirilgan bo‘lib',
            'views_count'=>129,
            'photo_path'=>'/image.jpg'
        ]);
    }
}
