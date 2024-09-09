<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JobCategorySeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Intern',
            ],
            [
                'name' => 'Junior',
            ],
            [
                'name' => 'Senior',
            ],
            [
                'name' => 'Lead',
            ],
            [
                'name' => 'Supervisor',
            ],
        ];

        // Using Query Builder
        $this->db->table('job_category')->insertBatch($data);
    }
}