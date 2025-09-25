<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateAuthLoginsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 25 September, 2025 10:04:41 AM
 */

class CreateAuthLoginsTable extends Migration
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
		'user_id' => [
			'type' => 'INT',
			'constraint' => 50,
			'null' => false,
		],
		'firstname' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'lastname' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'role' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'ip_address' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'date' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'successfull' => [
			'type' => 'INT',
			'constraint' => 2,
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('auth_logins');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('auth_logins');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}