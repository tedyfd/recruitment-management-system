<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SelectionDateTime extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],
        ];
        $this->forge->addColumn('selection', $fields);
    }

    public function down()
    {
        $this->forge->dropTable('selection');
    }
}