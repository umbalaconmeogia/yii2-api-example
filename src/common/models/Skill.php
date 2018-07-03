<?php

namespace common\models;

use batsg\models\BaseBatsgModel;

/**
 * This is the model class for table "skill".
 *
 * @property int $id
 * @property int $data_status
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 * @property string $uuid
 * @property string $name
 */
class Skill extends BaseBatsgModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_status', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['uuid', 'name'], 'string', 'max' => 255],
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
            'name' => 'Name',
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
