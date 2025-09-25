<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class UserRolesSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 25 September, 2025 10:04:57 AM
 */

class UserRolesSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $user_roles = [
            ['id' => '2','role_name' => 'Tenant',],
            ['id' => '1','role_name' => 'Super Admin',],
            ['id' => '3','role_name' => 'Customer',],
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('user_roles')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('user_roles')->insertBatch($user_roles);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
