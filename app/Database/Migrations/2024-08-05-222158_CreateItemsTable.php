<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployeeTable extends Migration
{
    public function up()
    {
        $db = \Config\Database::connect();
        $forge = \Config\Database::forge();

        // Menggunakan query raw untuk memeriksa apakah tabel sudah ada
        $tables = $db->listTables();
        if (!in_array('employees', $tables)) {
            $forge->addField([
                'id' => [
                    'type' => 'INT',
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'employee_name' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'date_of_joining' => [
                    'type' => 'DATE',
                ],
                'status' => [
                    'type' => 'ENUM',
                    'constraint' => ['Active', 'Inactive'],
                    'default' => 'Active',
                ],
            ]);
            $forge->addKey('id', true);
            $forge->createTable('employees');
        }
    }

    public function down()
    {
        $db = \Config\Database::connect();
        $forge = \Config\Database::forge();

        // Menggunakan query raw untuk memeriksa apakah tabel sudah ada
        $tables = $db->listTables();
        if (in_array('employees', $tables)) {
            $forge->dropTable('employees');
        }
    }
}