<?php

namespace frontend\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string $question_html
 * @property string $answer_html
 * @property string|null $created
 * @property string|null $updated
 */
class Question extends \common\models\Question
{
    public function getQuestion(){
        return \common\models\Question::find()->asArray()->all();
    }
}