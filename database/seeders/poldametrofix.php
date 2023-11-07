<?php

namespace Database\Seeders;

use App\Models\Adl;
use App\Models\Amt;
use App\Models\Artikel;
use App\Models\Beladiri;
use App\Models\Gds;
use App\Models\IzinNikah;
use App\Models\jasmaniberkala;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash as FacadesHash;

class poldametrofix extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'            => 'Admin Satu',
            'pangkat'            => 'bripka',
            'jabatan'            => 'kepala',
            'email'           => 'admin@saatu',
            'nrp'             => '11111112',
            'tgl_lahir'       => date('Y-m-d H:i:s'),
            'jenis_kelamin'   => 'Pria',
            'level'           => 'admin',
            'password'        => FacadesHash::make('12345678'),
            'status_agama'    => 'Islam',
            'status_keluarga' => 'nikah',
            'foto'            => 'library\chocolat\dist\demo-images\1.jpg'
        ]);

        User::create([
            'name'            => 'Putri Khairani',
            'pangkat'            => 'bripka',
            'jabatan'            => 'kepala',
            'email'           => 'putri@khairanii',
            'nrp'             => '99999999',
            'tgl_lahir'       => date('Y-m-d H:i:s'),
            'jenis_kelamin'   => 'Wanita',
            'level'           => 'personil',
            'password'        => FacadesHash::make('12345678'),
            'status_agama'    => 'Islam',
            'status_keluarga' => 'nikah',
            'foto'            => 'library\chocolat\dist\demo-images\1.jpg'
        ]);

        User::create([
            'name'            => 'Paur',
            'pangkat'            => 'bripka',
            'jabatan'            => 'kepala',
            'email'           => 'paur@gmail',
            'nrp'             => '12121212',
            'tgl_lahir'       => date('Y-m-d H:i:s'),
            'jenis_kelamin'   => 'Pria',
            'level'           => 'paur',
            'password'        => FacadesHash::make('12345678'),
            'status_agama'    => 'Islam',
            'status_keluarga' => 'nikah',
            'foto'            => 'library\chocolat\dist\demo-images\2.jpg'
        ]);

        User::create([
            'name'            => 'kasubbag_rohjashor',
            'pangkat'            => 'bripka',
            'jabatan'            => 'kepala',
            'email'           => 'kasubbag_rohjashor@gmail',
            'nrp'             => '11111111',
            'tgl_lahir'       => date('Y-m-d H:i:s'),
            'jenis_kelamin'   => 'Pria',
            'level'           => 'kasubbag_rohjashor',
            'password'        => FacadesHash::make('12345678'),
            'status_agama'    => 'Islam',
            'status_keluarga' => 'nikah',
            'foto'            => 'library\chocolat\dist\demo-images\3.jpg'
        ]);
        User::create([
            'name'            => 'kasubbag_khirdinlur',
            'jabatan'            => 'kepala',
            'pangkat'            => 'bripka',
            'email'           => 'kasubbag_khirdinlur@gmail',
            'nrp'             => '11111111',
            'tgl_lahir'       => date('Y-m-d H:i:s'),
            'jenis_kelamin'   => 'Pria',
            'level'           => 'kasubbag_khirdinlur',
            'password'        => FacadesHash::make('12345678'),
            'status_agama'    => 'Islam',
            'status_keluarga' => 'nikah',
            'foto'            => 'library\chocolat\dist\demo-images\3.jpg'
        ]);
        User::create([
            'name'            => 'kabag',
            'email'           => 'kabag@gmail',
            'pangkat'            => 'bripka',
            'jabatan'            => 'kepala',
            'nrp'             => '11111111',
            'tgl_lahir'       => date('Y-m-d H:i:s'),
            'jenis_kelamin'   => 'Pria',
            'level'           => 'kabag',
            'password'        => FacadesHash::make('12345678'),
            'status_agama'    => 'Islam',
            'status_keluarga' => 'nikah',
            'foto'            => 'library\chocolat\dist\demo-images\3.jpg'
        ]);
        User::create([
            'name'            => 'karo_sdm',
            'email'           => 'karo_sdm@gmail',
            'jabatan'            => 'kepala',
            'pangkat'            => 'bripka',
            'nrp'             => '11111111',
            'tgl_lahir'       => date('Y-m-d H:i:s'),
            'jenis_kelamin'   => 'Pria',
            'level'           => 'karo_sdm',
            'password'        => FacadesHash::make('12345678'),
            'status_agama'    => 'Islam',
            'status_keluarga' => 'nikah',
            'foto'            => 'library\chocolat\dist\demo-images\3.jpg'
        ]);
        Adl::create([
            'nama' => 'putri',
            'nrp' => '123456',
            'pertanyaan1'            => '1',
            'pertanyaan2'           => '1',
            'pertanyaan3'             => '1',
            'pertanyaan4'       => '1',
            'pertanyaan5'   => '1',
            'pertanyaan6'           => '1',
            'pertanyaan7'        => '1',
            'pertanyaan8'    => '1',
            'pertanyaan9' => '1',
            'pertanyaan10'            => '1',
        ]);
        Amt::create([
            'nama' => 'putri',
            'nrp' => '123456',
            'pertanyaan1'            => 'iya',
            'pertanyaan2'           => 'iya',
            'pertanyaan3'             => 'iya',
            'pertanyaan4'       => 'iya',
            'pertanyaan5'   => 'iya',
            'pertanyaan6'           => 'iya',
            'pertanyaan7'        => 'iya',
            'pertanyaan8'    => 'iya',
            'pertanyaan9' => 'iya',

        ]);
        Gds::create([
            'nama' => 'putri',
            'nrp' => '123456',
            'pertanyaan1'            => 'iya',
            'pertanyaan2'           => 'iya',
            'pertanyaan3'             => 'iya',
            'pertanyaan4'       => 'iya',
            'pertanyaan5'   => 'iya',
            'pertanyaan6'           => 'iya',
            'pertanyaan7'        => 'iya',
            'pertanyaan8'    => 'iya',
            'pertanyaan9' => 'iya',
            'pertanyaan10' => 'iya',
            'pertanyaan11' => 'iya',
            'pertanyaan12' => 'iya',
            'pertanyaan13' => 'iya',
            'pertanyaan14' => 'iya',
            'pertanyaan15' => 'iya',

        ]);
        Adl::create([
            'nama' => 'putri',
            'nrp' => '123456',
            'pertanyaan1'            => '1',
            'pertanyaan2'           => '1',
            'pertanyaan3'             => '1',
            'pertanyaan4'       => '1',
            'pertanyaan5'   => '1',
            'pertanyaan6'           => '1',
            'pertanyaan7'        => '1',
            'pertanyaan8'    => '1',
            'pertanyaan9' => '1',
            'pertanyaan10'            => '1',
        ]);
        Amt::create([
            'nama' => 'putri',
            'nrp' => '123456',
            'pertanyaan1'            => 'iya',
            'pertanyaan2'           => 'iya',
            'pertanyaan3'             => 'iya',
            'pertanyaan4'       => 'iya',
            'pertanyaan5'   => 'iya',
            'pertanyaan6'           => 'iya',
            'pertanyaan7'        => 'iya',
            'pertanyaan8'    => 'iya',
            'pertanyaan9' => 'iya',

        ]);
        Artikel::create([
            'judul_artikel'     => 'Ini contoh kedua artikel untuk jenis satu',
            'jenis_artikel'     => 1,
            'deskripsi_artikel' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quippe: habes enim a rhetoribus; Ergo infelix una molestia, fellx rursus, cum is ipse anulus in praecordiis piscis inventus est? Bork Ut proverbia non nulla veriora sint quam vestra dogmata. Qui ita affectus, beatum esse numquam probabis; Antiquorum autem sententiam Antiochus noster mihi videtur persequi diligentissime, quam eandem Aristoteli fuisse et Polemonis docet. Duo Reges: constructio interrete. Tubulum fuisse, qua illum, cuius is condemnatus est rogatione, P. Ergo adhuc, quantum equidem intellego, causa non videtur fuisse mutandi nominis. Hic quoque suus est de summoque bono dissentiens dici vere Peripateticus non potest. Indicant pueri, in quibus ut in speculis natura cernitur. Cur post Tarentum ad Archytam? Et hunc idem dico, inquieta sed ad virtutes et ad vitia nihil interesse. </p>

            <p>Et quod est munus, quod opus sapientiae? Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus; At hoc in eo M. Quid igitur, inquit, eos responsuros putas? Tum ille timide vel potius verecunde: Facio, inquit. Quis enim redargueret? </p>',
            'foto1'      => 'library\chocolat\dist\demo-images\1.jpg'


        ]);
        Beladiri::create([
            'nama'     => 'Putri Khairani',
            'nrp'     => 99999999,
            'jumlah_teknik_dasar_jatuh1'     => 20,
            'tgerak_teknik_dasar_jatuh1'     => 20,
            'sgerak_teknik_dasar_jatuh1'     => 20,
            'motivasi_teknik_dasar_jatuh1'     => 20,
            'penampilan_teknik_dasar_jatuh1'     => 20,
            'ket_teknik_dasar_jatuh1'     => 'bagus',

            'jumlah_teknik_dasar_jatuh2'     => 20,
            'tgerak_teknik_dasar_jatuh2'     => 20,
            'sgerak_teknik_dasar_jatuh2'     => 20,
            'motivasi_teknik_dasar_jatuh2'     => 20,
            'penampilan_teknik_dasar_jatuh2'     => 20,
            'ket_teknik_dasar_jatuh2'     => 'bagus',

            'jumlah_teknik_dasar_jatuh3'     => 20,
            'tgerak_teknik_dasar_jatuh3'     => 20,
            'sgerak_teknik_dasar_jatuh3'     => 20,
            'motivasi_teknik_dasar_jatuh3'     => 20,
            'penampilan_teknik_dasar_jatuh3'     => 20,
            'ket_teknik_dasar_jatuh3'     => 'bagus',

            'jumlah_teknik_dasar_jatuh4'     => 20,
            'tgerak_teknik_dasar_jatuh4'     => 20,
            'sgerak_teknik_dasar_jatuh4'     => 20,
            'motivasi_teknik_dasar_jatuh4'     => 20,
            'penampilan_teknik_dasar_jatuh4'     => 20,
            'ket_teknik_dasar_jatuh4'     => 'bagus',

            'jumlah_dasar_beladiri1'     => 20,
            'tgerak_dasar_beladiri1'     => 20,
            'sgerak_dasar_beladiri1'     => 20,
            'motivasi_dasar_beladiri1'     => 20,
            'penampilan_dasar_beladiri1'     => 20,
            'ket_dasar_beladiri1'     => 'bagus',

            'jumlah_dasar_beladiri2'     => 20,
            'tgerak_dasar_beladiri2'     => 20,
            'sgerak_dasar_beladiri2'     => 20,
            'motivasi_dasar_beladiri2'     => 20,
            'penampilan_dasar_beladiri2'     => 20,
            'ket_dasar_beladiri2'     => 'bagus',

            'jumlah_dasar_beladiri3'     => 20,
            'tgerak_dasar_beladiri3'     => 20,
            'sgerak_dasar_beladiri3'     => 20,
            'motivasi_dasar_beladiri3'     => 20,
            'penampilan_dasar_beladiri3'     => 20,
            'ket_dasar_beladiri3'     => 'bagus',

            'jumlah_kombinasiteknik_beladiri1'     => 20,
            'tgerak_kombinasiteknik_beladiri1'     => 20,
            'sgerak_kombinasiteknik_beladiri1'     => 20,
            'motivasi_kombinasiteknik_beladiri1'     => 20,
            'penampilan_kombinasiteknik_beladiri1'     => 20,
            'ket_kombinasiteknik_beladiri1'     => 'bagus',

            'jumlah_kombinasiteknik_beladiri2'     => 20,
            'tgerak_kombinasiteknik_beladiri2'     => 20,
            'sgerak_kombinasiteknik_beladiri2'     => 20,
            'motivasi_kombinasiteknik_beladiri2'     => 20,
            'penampilan_kombinasiteknik_beladiri2'     => 20,
            'ket_kombinasiteknik_beladiri2'     => 'bagus',

            'jumlah_kombinasiteknik_beladiri3'     => 20,
            'tgerak_kombinasiteknik_beladiri3'     => 20,
            'sgerak_kombinasiteknik_beladiri3'     => 20,
            'motivasi_kombinasiteknik_beladiri3'     => 20,
            'penampilan_kombinasiteknik_beladiri3'     => 20,
            'ket_kombinasiteknik_beladiri3'     => 'bagus',


            'rangkaian1'     => 20,
            'rangkaian2'     => 20,

            'jumlah'     => 20,
        ]);
        JasmaniBerkala::create([
            'nama'            => 'Putri Khairani',
            'nrp'             => '99999999',
            'pangkat'       => 'Paur',
            'jabatan'   => 'Wanita',
            'kesatuan'           => 'Biro SDM Polda Metro',
            'tanggal_lahir'        => date('Y-m-d H:i:s'),
            'umur'    => '28',
            'golongan' => 'nikah',
            'lari_12_menit'     => 20,
            'gerakan_pull_up'     => 20,
            'gerakan_push_up'     => 20,
            'gerakan_sit_up'     => 20,
            'putaran_shuttle_run'     => 20,
            'nilai_rata_rata'     => 20,
            'nilai_akhir'     => 20,

        ]);
    }
}
