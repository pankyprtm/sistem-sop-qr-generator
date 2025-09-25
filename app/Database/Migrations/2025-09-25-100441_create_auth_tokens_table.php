<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateAuthTokensTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 25 September, 2025 10:04:41 AM
 */

class CreateAuthTokensTable extends Migration
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
			'constraint' => 11,
			'null' => false,
		],
		'selector' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'hashedvalidator' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'expires' => [
			'type' => 'DATETIME',
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('auth_tokens');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('auth_tokens');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}