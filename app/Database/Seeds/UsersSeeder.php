<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class UsersSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 25 September, 2025 10:04:57 AM
 */

class UsersSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $users = [
            ['id' => '1','firstname' => 'admin','lastname' => 'admin','email' => 'admin@gmail.com','password' => '$argon2id$v=19$m=65536,t=4,p=1$Z0IuOGdBUzREVkFXRTRpNw$HSBT9bAPuYWMKpwh8qi0eMIjeL8FSNp5rKmqvy/TMhk','reset_token' => '','reset_expire' => NULL,'activated' => '1','activate_token' => NULL,'activate_expire' => NULL,'role' => '1','created_at' => '2025-09-25 09:52:12','updated_at' => '2025-09-25 09:52:12','deleted_at' => NULL,],
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('users')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('users')->insertBatch($users);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
