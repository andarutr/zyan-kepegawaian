<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nip' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'pendidikan' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'tgl_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'is_admin' => [
                'type' => 'BOOLEAN',
            ],
            'updated_at' => [
                'type' => 'DATE',
            ],
            'created_at' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
