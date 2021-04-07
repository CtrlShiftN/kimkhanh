<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property int $id
 * @property string $title
 * @property string|null $avatar
 * @property string $link
 * @property int|null $doc_types 0: firmwares, 1: images, 2: files
 * @property int|null $status 0: inactive, 1: active
 * @property string|null $created
 * @property string|null $updated
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'link'], 'required'],
            [['doc_types', 'status'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['title', 'avatar', 'link'], 'string', 'max' => 255],
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
            'avatar' => Yii::t('app', 'Avatar'),
            'link' => Yii::t('app', 'Link'),
            'doc_types' => Yii::t('app', '0: firmwares, 1: images, 2: files'),
            'status' => Yii::t('app', '0: inactive, 1: active'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }
}
