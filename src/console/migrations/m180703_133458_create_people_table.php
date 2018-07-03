<?php

use yii\db\Migration;
use batsg\migrations\BaseMigrationCreateTable;

/**
 * Handles the creation of table `people`.
 */
class m180703_133458_create_people_table extends BaseMigrationCreateTable
{
    protected $table = 'people';
    
    /**
     * {@inheritdoc}
     */
    public function createDbTable()
    {
        $this->createTableWithExtraFields($this->table, [
            'uuid' => $this->string(),
            'name' => $this->string(),
            'gender' => $this->smallInteger(),
        ]);
        $this->createIndexes($this->table, [
            'uuid',
        ]);
    }
}
