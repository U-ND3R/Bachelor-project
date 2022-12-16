<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTblSurveys extends AbstractMigration
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
        $table = $this->table('tbl_surveys');
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
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('number_of_questions', 'integer', [
            'default' => null,
            'limit' => 10,
            'null' => false,
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
