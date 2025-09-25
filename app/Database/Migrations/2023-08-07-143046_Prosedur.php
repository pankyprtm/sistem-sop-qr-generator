<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prosedur extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 50,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name_sop' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'file_sop' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'file_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'created_by' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'update_at' => [
                'type' => 'DATETIME',
            ],
            'update_by' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('prosedur');
    }

    public function down()
    {
        $this->forge->dropTable('prosedur');
    }
}
