<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubMenu extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel menu
        $this->forge->addField([
            'id_submenu'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'id_menu'       => [
                'type'           => 'INT',
            ],
            'nama_submenu'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'url'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],

            'ikon'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',

            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id_submenu', TRUE);

        // Membuat tabel menu
        $this->forge->createTable('sub_menu', TRUE);
    }

    public function down()
    {
        // menghapus tabel menu
        $this->forge->dropTable('sub_menu');
    }
}
