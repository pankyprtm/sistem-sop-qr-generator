<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateUsersTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 25 September, 2025 10:04:41 AM
 */

class CreateUsersTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => false,
			'auto_increment' => true,
		],
		'firstname' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'lastname' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'email' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'password' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'reset_token' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => false,
		],
		'reset_expire' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'activated' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'activate_token' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => true,
		],
		'activate_expire' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => true,
		],
		'role' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => false,
		],
		'created_at datetime NULL DEFAULT current_timestamp()',
		'updated_at datetime NULL DEFAULT current_timestamp()',
		'deleted_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('users');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('users');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}