<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SelectionStatus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unique' => true,
                'null' => false,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'icon' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'color' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('selection_status');
    }

    public function down()
    {
        $this->forge->dropTable('selection_status');
    }
}