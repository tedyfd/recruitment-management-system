<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeed extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'hr',
            'password'    =>  password_hash('123', PASSWORD_DEFAULT),
            'name' => 'hr'
        ];

        // Using Query Builder
        $this->db->table('hr')->insert($data);
    }
}