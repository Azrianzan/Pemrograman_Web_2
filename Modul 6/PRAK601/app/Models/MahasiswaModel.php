<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getDataMahasiswa()
    {
        return [
            'nama' => 'Muhammad Azrianzan',
            'nim'  => '2310817210003',
            'prodi' => 'Teknologi Informasi',
            'email' => 'muhammadazrianzan@gmail.com',
            'hobi' => 'Membaca, Menonton Film Dokumenter',
            'skill' => 'Touch Typing, Coding',
            'domisili' => 'Banjarmasin',
            'gambar' => 'foto_profil.jpeg'
        ];
    }
}
?>