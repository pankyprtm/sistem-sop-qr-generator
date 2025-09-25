<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class ProsedurSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 25 September, 2025 10:04:57 AM
 */

class ProsedurSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $prosedur = [
            ['id' => '1','name_sop' => 'SOP Ruangan Office','description' => 'Ini Merupakan Sop Ruangan Office ya','file_sop' => '','file_url' => 'https://github.com/pankyprtm/pankyprtm','created_at' => '2025-09-25 10:17:36','created_by' => 'admin','updated_at' => '2025-09-25 10:21:34','updated_by' => 'admin',],
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('prosedur')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('prosedur')->insertBatch($prosedur);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
