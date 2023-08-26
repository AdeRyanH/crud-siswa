<?php

namespace Database\Seeders;

use App\Models\data_siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class data_siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        data_siswa::create([
            'nis' => '121',
            'nama' => 'bambang kur',
            'kelas' => '11A'
        ]);

        data_siswa::create([
            'nis' => '122',
            'nama' => 'bumbung',
            'kelas' => '11A'
        ]);

        data_siswa::create([
            'nis' => '123',
            'nama' => 'bimbing',
            'kelas' => '11A'
        ]);
    }
}