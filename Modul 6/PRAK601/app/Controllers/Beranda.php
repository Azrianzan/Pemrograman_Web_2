<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Beranda extends BaseController
{
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        $dataMahasiswa = $mahasiswa->getDataMahasiswa();
        return view('beranda', $dataMahasiswa);
    }

    public function profil()
    {
        $mahasiswa = new MahasiswaModel();
        $dataMahasiswa = $mahasiswa->getDataMahasiswa();
        return view('profil', $dataMahasiswa);
    }
}
?>