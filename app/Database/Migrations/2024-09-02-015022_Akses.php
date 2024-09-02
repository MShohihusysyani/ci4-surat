<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Akses extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel menu
        $this->forge->addField([
            'id_akses'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'id_level'       => [
                'type'           => 'INT',
            ],
            'id_menu'       => [
                'type'           => 'INT',
            ],
            'id_submenu'      => [
                'type'           => 'INT'
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id_akses', TRUE);

        // Membuat tabel menu
        $this->forge->createTable('akses', TRUE);
    }

    public function down()
    {
        // menghapus tabel menu
        $this->forge->dropTable('akses');
    }
}
