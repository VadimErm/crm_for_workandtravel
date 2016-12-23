<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "programs".
 *
 * @property integer $id
 * @property string $title
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 20],
            [['year'], 'integer', 'max' =>9999]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'year' => 'Year'
        ];
    }
    public function getAgreements()
    {

        return $this->hasMany(Agreement::className(), ['program_id' => 'id']);

    }

}
