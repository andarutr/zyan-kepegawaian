<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePelatihanTable extends Migration
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
             'user_id' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
           ],
           'pelatihan' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'tempat' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'tahun' => [
                'type' => 'INT',
                'constraint' => 4
            ],
            'updated_at' => [
                'type' => 'DATE',
            ],
            'created_at' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pelatihan');
    }

    public function down()
    {
        $this->forge->dropTable('pelatihan');
    }
}
