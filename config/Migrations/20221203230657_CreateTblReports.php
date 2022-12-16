<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTblReports extends AbstractMigration
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
        $table = $this->table('tbl_reports');
        $table->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('client_id', 'integer', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('survey_id', 'integer', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('question_id', 'integer', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('responce_id', 'integer', [
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
        $table->addIndex([
            'client_id',
        
            ], [
            'name' => 'UNIQUE_CLIENT_ID',
            'unique' => true,
        ]);
        $table->addIndex([
            'survey_id',
        
            ], [
            'name' => 'UNIQUE_SURVEY_ID',
            'unique' => true,
        ]);
        $table->addIndex([
            'question_id',
        
            ], [
            'name' => 'UNIQUE_QUESTION_ID',
            'unique' => true,
        ]);
        $table->addIndex([
            'responce_id',
        
            ], [
            'name' => 'UNIQUE_RESPONCE_ID',
            'unique' => true,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->create();
    }
}
