<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTblClients extends AbstractMigration
{
    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('tbl_clients');
        $table->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('first_name', 'string', [
            'default' => null,
            'limit' => 3,
            'null' => false,
        ]);
        $table->addColumn('last_name', 'string', [
            'default' => null,
            'limit' => 3,
            'null' => false,
        ]);
        $table->addColumn('personal_number', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('survey_code', 'string', [
            'default' => null,
            'limit' => 12,
            'null' => true,
        ]);
        $table->addColumn('status', 'integer', [
            'default' => 1,
            'limit' => 5,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'company_id',
        
            ], [
            'name' => 'UNIQUE_COMPANY_ID',
            'unique' => true,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->create();
    }
}
