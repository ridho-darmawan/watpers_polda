<?php

namespace App\Helpers;
use Illuminate\Support\Str;

class FileHelper
{
    public static function storeFile($file, $field, $nrp)
    {
        $fileName = $field . '_' . time() . '_' . $nrp . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('efile', $fileName, 'public');

        return $fileName;
    }

    public static function tanggal_indo($tanggal)
    {
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }
}
?>