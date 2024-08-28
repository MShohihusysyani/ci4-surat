<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '256'
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '256',
            ],
            'nama_lengkap' => [
                'type'           => 'VARCHAR',
                'constraint'     => '256',
            ],
            'nama_alias' => [
                'type'           => 'VARCHAR',
                'constraint'     => '256',
            ],
            'role'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel user
        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        // menghapus tabel user
        $this->forge->dropTable('user');
    }
}
