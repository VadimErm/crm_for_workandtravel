<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property integer $id
 * @property string $path
 * @property integer $user_id
 * @property integer $type
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'type'], 'integer'],
            [['path'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'user_id' => 'User ID',
            'type' => 'Type',
        ];
    }
}
