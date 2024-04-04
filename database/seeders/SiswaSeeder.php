<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nis' => 1128521,
            'nama' => 'Mama Mia',
            'alamat' => 'KG.III/659',
            'sekolah_id' => 1 ,
            'created_at' => Carbon::now()
        ]);
    }
}
