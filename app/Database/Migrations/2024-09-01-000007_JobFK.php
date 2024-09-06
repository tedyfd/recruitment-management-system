<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JobFK extends Migration
{
    public function up()
    {

        $fields = [
            'job_category_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'job_position_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'job_organization_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ];
        $this->forge->addForeignKey('job_category_id', 'job_category', 'id');
        $this->forge->addForeignKey('job_position_id', 'job_position', 'id');
        $this->forge->addForeignKey('organization_id', 'organization', 'id');
        $this->forge->addColumn('job', $fields);
    }

    public function down()
    {
        
    }
}