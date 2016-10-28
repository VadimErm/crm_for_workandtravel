<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "colleges".
 *
 * @property integer $id
 * @property integer $number
 * @property string $educ_start
 * @property string $educ_finish
 */
class College extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'colleges';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number'], 'integer'],
            [['educ_start', 'educ_finish'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'educ_start' => 'Educ Start',
            'educ_finish' => 'Educ Finish',
        ];
    }
}
