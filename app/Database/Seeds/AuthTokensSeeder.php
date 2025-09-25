<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class AuthTokensSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 25 September, 2025 10:04:57 AM
 */

class AuthTokensSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $auth_tokens = [
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('auth_tokens')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('auth_tokens')->insertBatch($auth_tokens);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
