<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_mahasiswa')->insert([
            'nim' => "F1E122146",
            'nama' => "M. Alviandra Risyad",
            'kelas' => "R-007",
            'des' => ""
        ]);

        DB::table('table_mahasiswa')->insert([
            'nim' => "F1E122148",
            'nama' => "Baldy Antila Putra",
            'kelas' => "R-002",
            'des' => ""
        ]);

        DB::table('table_mahasiswa')->insert([
            'nim' => "F1E122109",
            'nama' => "Fito",
            'kelas' => "R-004",
            'des' => ""
        ]);
    }
}
