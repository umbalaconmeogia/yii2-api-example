<?php

use batsg\migrations\BaseMigrationCreateTable;

/**
 * Handles the creation of table `people_skill`.
 */
class m180703_151601_create_people_skill_table extends BaseMigrationCreateTable
{
    protected $table = 'people_skill';
    /**
     * {@inheritdoc}
     */
    public function createDbTable()
    {
        $this->createTableWithExtraFields($this->table, [
            'uuid' => $this->string(),
            'people_id' => $this->integer(),
            'skill_id' => $this->integer(),
            'level' => $this->string(),
            'experience_year' => $this->float(),
            'confirmed' => $this->smallInteger(),
            'remarks' => $this->text(),
        ]);
        $this->createIndexes($this->table, [
            'uuid',
        ]);
        $this->addForeignKeys($this->table, [
            ['people_id', 'people', 'id'],
            ['skill_id', 'skill', 'id'],
        ]);
    }
}
