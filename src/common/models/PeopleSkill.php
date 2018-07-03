<?php

namespace common\models;

use batsg\models\BaseBatsgModel;

/**
 * This is the model class for table "people_skill".
 *
 * @property int $id
 * @property int $data_status
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 * @property string $uuid
 * @property int $people_id
 * @property int $skill_id
 * @property string $level
 * @property double $experience_year
 * @property int $confirmed
 * @property string $remarks
 */
class PeopleSkill extends BaseBatsgModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people_skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_status', 'created_by', 'created_at', 'updated_by', 'updated_at', 'people_id', 'skill_id', 'confirmed'], 'integer'],
            [['experience_year'], 'number'],
            [['remarks'], 'string'],
            [['uuid', 'level'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_status' => 'Data Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'uuid' => 'Uuid',
            'people_id' => 'People ID',
            'skill_id' => 'Skill ID',
            'level' => 'Level',
            'experience_year' => 'Experience Year',
            'confirmed' => 'Confirmed',
            'remarks' => 'Remarks',
        ];
    }

    /**
     * @return string
     */
    protected function uniqueIdAttributeName()
    {
        return 'uuid';
    }
}
