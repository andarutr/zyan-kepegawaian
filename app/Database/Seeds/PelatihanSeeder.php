<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PelatihanSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $pelatihan = $db->table('pelatihan');

        $pelatihan->insert([
            'user_id' => 1,
            'pelatihan' => 'LSP Junior Web Developer',
            'tempat' => 'Universitas Mercu Buana',
            'tahun' => '2023',
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
        ]);
    }
}
