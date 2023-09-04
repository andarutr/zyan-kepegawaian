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
            'nip' => 197502722072121022,
            'nama' => 'Andaru',
            'pendidikan' => 'Strata I',
            'jabatan' => 'Administrator',
            'tgl_lahir' => '22-02-2001',
            'tempat_lahir' => 'Ponorogo, Jawa Timur',
            'password' => password_hash('user1234', PASSWORD_DEFAULT),
            'picture' => 'andarutr.png',
            'is_pegawai' => 1,
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
        ]);

        $user->insert([
            'nip' => 197502722072121088,
            'nama' => 'Triadi',
            'pendidikan' => 'Strata I',
            'jabatan' => 'Administrator',
            'tgl_lahir' => '22-02-2001',
            'tempat_lahir' => 'Ponorogo, Jawa Timur',
            'password' => password_hash('user1234', PASSWORD_DEFAULT),
            'picture' => 'andarutr.png',
            'is_pegawai' => 0,
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
        ]);
    }
}
