<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taask3".
 *
 * @property int $id
 * @property string $content
 */
class Taask3 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taask3';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'content'], 'required'],
            [['id'], 'integer'],
            [['content'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
        ];
    }
}
