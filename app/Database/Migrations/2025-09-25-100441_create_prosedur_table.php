<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateProsedurTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 25 September, 2025 10:04:41 AM
 */

class CreateProsedurTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'INT',
			'constraint' => 50,
			'null' => false,
			'unsigned' => true,
			'auto_increment' => true,
		],
		'name_sop' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'description' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'file_sop' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'file_url' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'created_at' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'created_by' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'updated_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'updated_by' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('prosedur');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('prosedur');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}