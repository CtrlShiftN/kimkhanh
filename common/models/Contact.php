<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property int|null $phone
 * @property string|null $subject
 * @property string|null $content
 * @property string|null $created
 * @property string|null $updated
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'subject', 'content'], 'string', 'max' => 255],
            [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Họ và tên',
            'email' => 'Nhập email',
            'phone' => 'Số điện thoại',
            'subject' => 'Chủ đề',
            'content' => 'Nội dung chi tiết',
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }
}
