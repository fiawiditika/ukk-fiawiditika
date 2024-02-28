<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ukk_fia2024Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ukk_fia2024')->insert([
            'judul'=>'Saturnus',
            'bukuId'=>'1',
            'penulis'=>'Aluna',
            'penerbit'=>'Luna',
            'tahunterbit'=>'2000',
            'created_at'=>date('Y-m-d H.i.s')
        ]);
        
        DB::table('ukk_fia2024')->insert([
            'judul'=>'Uranus',
            'bukuId'=>'2',
            'penulis'=>'Widi',
            'penerbit'=>'Tika',
            'tahunterbit'=>'2001',
            'created_at'=>date('Y-m-d H.i.s')
        ]);
    }
}
