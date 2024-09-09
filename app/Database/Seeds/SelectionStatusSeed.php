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
                'status'  =>  'Accept',
                'icon'  =>  'check_box',
                'color'  =>  'text-success',
            ],
            [
                'id' => 2,
                'status'  =>  'Reject',
                'icon'  =>  'disabled_by_default',
                'color'  =>  'text-danger',
            ],
            [
                'id' => 3,
                'status'  =>  'Form Input',
                'icon'  =>  'description',
                'color'  =>  'text-info',
            ],
            [
                'id' => 4,
                'status'  =>  'Form Review',
                'icon'  =>  'assignment',
                'color'  =>  'text-info',
            ],
            [
                'id' => 5,
                'status'  =>  'HR Review Accepted',
                'icon'  =>  'checklist_rtl',
                'color'  =>  'text-info',
            ],
            [
                'id' => 6,
                'status'  =>  'User Review',
                'icon'  =>  'assignment',
                'color'  =>  'text-info',
            ],
        ];

        // Using Query Builder
        $this->db->table('selection_status')->insertBatch($data);
    }
}