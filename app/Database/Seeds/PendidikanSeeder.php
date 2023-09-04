<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $pendidikan = $db->table('pendidikan');

        $pendidikan->insert([
            'user_id' => 1,
            'tingkat' => 'S1',
            'universitas' => 'Universitas Bina Sarana Informatika',
            'jurusan' => 'Teknologi Informasi',
            'tahun_lulus' => '2023',
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
        ]);
    }
}
