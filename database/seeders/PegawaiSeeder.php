<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pegawai = [
            ['kodepegawai'=>'01','namapegawai'=>'Rusdi','kerja_bagian'=>'cashier'],
            ['kodepegawai'=>'02','namapegawai'=>'Narji','kerja_bagian'=>'waiter'],
            ['kodepegawai'=>'03','namapegawai'=>'Azriel','kerja_bagian'=>'Chef'],
        ];
        DB::table('pegawai')->insert($pegawai);
    }
}
