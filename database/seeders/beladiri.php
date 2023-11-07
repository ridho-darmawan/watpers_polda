<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class beladiri extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $beladiridata = [
            [
                'nama' => 'abdul',
                'nrp' => '123456',
                'nilai_smk' => 'nilai smk',
                'penilaiaan_prestasikerja' => 'penilaiann prestasi kerja',
                'kep_pangkatpertama' => 'kep pangkat pertama',
                'kep_pangkatterakhir' => 'kep pangkat terakhir',
                'kep_kenaikangaji' => 'kep kenaikan gaji',
                'surat_kenaikangaji' => 'surat kenaikan gaji ',

            ],


        ];

        foreach ($beladiridata as $kgb => $val) {
            KenaikanGajiBerkalaSubmission::create($val);
        }
    }
}
