<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property integer $created_at
 * @property integer $updated_at
 */
class Content extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['slug'], 'required'],
            [['title', 'slug'], 'string', 'max' => 60],
            [['slug'], 'unique'],
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
            'content' => 'Content',
            'slug' => 'Slug',
            'created_at' => 'Created',
            'updated_at' => 'Updated',
        ];
    }
}
