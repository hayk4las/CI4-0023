<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
        public function up()
        {
                $this->forge->addField(array(
                        'id' => [
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'username' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'unique' => true,
                        ],
                        'password' => [
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ],
                        'nama_lengkap' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'unique' => true,
                        ],
                        'email' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'unique' => true,
                                'errors' => ['required' => '{field} Wajib Diisi Tidak Boleh Kosong !!!']
                        ],
                        'token' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'last_login timestamp default now()'
        ));
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user');
        }
        public function down()
        {
        //
        }
}
