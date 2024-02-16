<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class karyawan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawan')->insert([
            'npk' => "",
            'nama' => "",
            'alamat' => "",
        ]);
    }
}
