<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JobOrganizationSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  =>  'Research and Developement',
            ],
            [
                'name'  =>  'Analyst',
            ],
            [
                'name'  =>  'Database',
            ],
            [
                'name'  =>  'Developer',
            ],
            [
                'name'  =>  'Project Manager Organization',
            ],
        ];

        // Using Query Builder
        $this->db->table('job_organization')->insertBatch($data);
    }
}