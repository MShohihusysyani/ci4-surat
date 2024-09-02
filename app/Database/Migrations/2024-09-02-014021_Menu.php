<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel menu
        $this->forge->addField([
            'id_menu'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'nama_menu'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '256'
            ],
            'link'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '256',
                'default'        => 'Non'

            ],
            'icon'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id_menu', TRUE);

        // Membuat tabel menu
        $this->forge->createTable('menu', TRUE);
    }

    public function down()
    {
        // menghapus tabel menu
        $this->forge->dropTable('menu');
    }
}
