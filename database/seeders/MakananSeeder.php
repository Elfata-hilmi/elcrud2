<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $makanan = [
            ['nomakanan'=>'1','nama_makanan' => 'Muwanhi Steak','stok' =>'120'],
            ['nomakanan'=>'2','nama_makanan' => 'Spicy Porkcop','stok' =>'90'],
            ['nomakanan'=>'3','nama_makanan' => 'Hot Muwanhi Chiken','stok' =>'100'],
        ];
        DB::table('makanan')->insert($makanan);
    }
}
