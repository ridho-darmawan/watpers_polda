<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'nrp' => '325345',
                'status_agama' => '325345',
                'status_keluarga' => '325345',
                'foto' => '1.png'

            ],
            [
                'name' => 'paur',
                'email' => 'paur@gmail.com',
                'password' => bcrypt('paur'),
                'role' => 'paur',
                'nrp' => '325345',
                'status_agama' => '325345',
                'status_keluarga' => '325345',
                'foto' => '1.png'

            ],
            [
                'name' => 'kasubbag_rohjashor',
                'email' => 'kasubbag_rohjashor@gmail.com',
                'password' => bcrypt('kasubbagrohjashor'),
                'role' => 'kasubbag_rohjashor',
                'nrp' => '325345',
                'status_agama' => '325345',
                'status_keluarga' => '325345',
                'foto' => '1.png'

            ],
            [
                'name' => 'kasubbag_khirdinlur',
                'email' => 'kasubbag_khirdinlur@gmail.com',
                'password' => bcrypt('kasubbag_khirdinlur'),
                'role' => 'kasubbag_khirdinlur',
                'nrp' => '325345',
                'status_agama' => '325345',
                'status_keluarga' => '325345',
                'foto' => '1.png'

            ],
            [
                'name' => 'kabag',
                'email' => 'kabag@gmail.com',
                'password' => bcrypt('kabag'),
                'role' => 'kabag',
                'nrp' => '325345',
                'status_agama' => '325345',
                'status_keluarga' => '325345',
                'foto' => '1.png'

            ],
            [
                'name' => 'karo_sdm',
                'email' => 'karo_sdm@gmail.com',
                'password' => bcrypt('karo_sdm'),
                'role' => 'karo_sdm',
                'nrp' => '325345',
                'status_agama' => '325345',
                'status_keluarga' => '325345',
                'foto' => '1.png'

            ],
        ];
        foreach ($userData as $user => $val) {
            User::create($val);
        }
    }
}
