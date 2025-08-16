<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'   => 'Xyrl',
                'email'      => 'racazaxyrl@example.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'Johnrey',
                'email'      => 'Layan@example.com',
                'password'   => password_hash('student123', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'John daniel',
                'email'      => 'Maranan@example.com',
                'password'   => password_hash('student123', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'Jim Jamero',
                'email'      => 'JimJamero@example.com',
                'password'   => password_hash('instructor123', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];  

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}