<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $user = $db->table('users');

        $user->insert([
            'nip' => 197502722072121002,
            'nama' => 'Andaru Triadi',
            'pendidikan' => 'Strata I',
            'jabatan' => 'Web Developer',
            'tgl_lahir' => '22-02-2001',
            'tempat_lahir' => 'Ponorogo, Jawa Timur',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'picture' => 'user.png',
            'is_pegawai' => 1,
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
        ]);
    }
}
