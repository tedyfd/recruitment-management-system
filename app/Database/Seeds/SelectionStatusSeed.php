<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SelectionStatusSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'status'  =>  'accept',
            ],
            [
                'id' => 2,
                'status'  =>  'cancel',
            ],
            [
                'id' => 3,
                'status'  =>  'form',
            ],
            [
                'id' => 4,
                'status'  =>  'form review',
            ],
            [
                'id' => 5,
                'status'  =>  'hr review',
            ],
            [
                'id' => 6,
                'status'  =>  'user review',
            ],
        ];

        // Using Query Builder
        $this->db->table('selection_status')->insertBatch($data);
    }
}