<?php

use yii\db\Migration;
use batsg\migrations\BaseMigrationCreateTable;

/**
 * Handles the creation of table `skill`.
 */
class m180703_151551_create_skill_table extends BaseMigrationCreateTable
{
    protected $table = 'skill';
    /**
     * {@inheritdoc}
     */
    public function createDbTable()
    {
        $this->createTableWithExtraFields($this->table, [
            'uuid' => $this->string(),
            'name' => $this->string(),
        ]);
        $this->createIndexes($this->table, [
            'uuid',
        ]);
    }
}
