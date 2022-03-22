<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ],
                'deskripsi' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
            ]
        );

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('todo');
    }

    public function down()
    {
        $this->forge->dropTable('todo');
    }
}
