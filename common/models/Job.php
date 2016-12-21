<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jobs".
 *
 * @property integer $id
 * @property string $title
 * @property string $position
 * @property string $start_working
 * @property string $finish_working
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_working', 'finish_working'], 'string', 'max' =>7],
            [['company_name'], 'string', 'max' => 50],
            [['position'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'position' => 'Position',
            'start_working' => 'Start Working',
            'finish_working' => 'Finish Working',
        ];
    }


}
