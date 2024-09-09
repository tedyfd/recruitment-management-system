<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JobPositionSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  =>  'Software Engineer',
            ],
            [
                'name'  =>  'Front End Developer',
            ],
            [
                'name'  =>  'Back End Developer',
            ],
            [
                'name'  =>  'System Engineer',
            ],
            [
                'name'  =>  'System Analyst',
            ],
            [
                'name'  =>  'Database Administrator',
            ],
            [
                'name'  =>  'DevOps Engineer',
            ],
            [
                'name'  =>  'Project Manager',
            ],
            [
                'name'  =>  'Project Planner',
            ],
        ];

        // Using Query Builder
        $this->db->table('job_position')->insertBatch($data);
    }
}