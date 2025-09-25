<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class AuthLoginsSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 25 September, 2025 10:04:57 AM
 */

class AuthLoginsSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $auth_logins = [
            ['id' => '1','user_id' => '1','firstname' => 'admin','lastname' => 'admin','role' => '1','ip_address' => '::1','date' => '2025-09-25 02:52:51','successfull' => '1',],
            ['id' => '2','user_id' => '1','firstname' => 'admin','lastname' => 'admin','role' => '1','ip_address' => '::1','date' => '2025-09-25 03:06:58','successfull' => '1',],
            ['id' => '3','user_id' => '1','firstname' => 'admin','lastname' => 'admin','role' => '1','ip_address' => '::1','date' => '2025-09-25 03:34:55','successfull' => '1',],
            ['id' => '4','user_id' => '1','firstname' => 'admin','lastname' => 'admin','role' => '1','ip_address' => '::1','date' => '2025-09-25 03:36:13','successfull' => '1',],
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('auth_logins')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('auth_logins')->insertBatch($auth_logins);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
