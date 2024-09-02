<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Level extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel menu
        $this->forge->addField([
            'id_level'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'nama_level'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '256'
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id_level', TRUE);

        // Membuat tabel menu
        $this->forge->createTable('level', TRUE);
    }

    public function down()
    {
        // menghapus tabel menu
        $this->forge->dropTable('level');
    }
}
