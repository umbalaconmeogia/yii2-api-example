<?php

namespace common\models;

use batsg\models\BaseBatsgModel;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property int $data_status
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 * @property string $uuid
 * @property string $name
 * @property int $gender
 */
class People extends BaseBatsgModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_status', 'created_by', 'created_at', 'updated_by', 'updated_at', 'gender'], 'integer'],
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
            'gender' => 'Gender',
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
