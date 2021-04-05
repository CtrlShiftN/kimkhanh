<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string $question_html
 * @property string $answer_html
 * @property string|null $created
 * @property string|null $updated
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_html', 'answer_html'], 'required'],
            [['question_html', 'answer_html'], 'string'],
            [['created', 'updated'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_html' => 'Question Html',
            'answer_html' => 'Answer Html',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
