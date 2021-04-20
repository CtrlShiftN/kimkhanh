<?php

namespace frontend\models;

use common\models\Recommend;
use Yii;

/**
 * This is the model class for table "recommend".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $feature_image
 * @property string $content_html
 * @property int|null $status 0: inactive; 1: active
 * @property string|null $note
 * @property string|null $created
 * @property string|null $updated
 * @property int|null $admin_id
 */
class RecommendSearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recommend';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content_html'], 'required'],
            [['content_html'], 'string'],
            [['status', 'admin_id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['title', 'description', 'feature_image', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'feature_image' => Yii::t('app', 'Feature Image'),
            'content_html' => Yii::t('app', 'Content Html'),
            'status' => Yii::t('app', '0: inactive; 1: active'),
            'note' => Yii::t('app', 'Note'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'admin_id' => Yii::t('app', 'Admin ID'),
        ];
    }

    /**
     * Get all recommend details from recommend table
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getAllRecommend()
    {
        return Recommend::find()->where(['status' => 1])->asArray()->all();
    }

    /**
     * @param $recommendId
     * @return array|\yii\db\ActiveRecord|null
     */
    public function getRecommendById($recommendId)
    {
        return Recommend::find()->where(['id' => $recommendId, 'status' => 1])->asArray()->one();
    }
}
