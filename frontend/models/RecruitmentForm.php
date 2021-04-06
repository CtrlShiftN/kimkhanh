<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "recruitment".
 *
 * @property int $id
 * @property string $fullname
 * @property string $img_avatar
 * @property string $birth
 * @property string $gender
 * @property string $address
 * @property string $tel
 * @property string $email
 * @property string|null $foreign_language
 * @property string|null $experience
 * @property string|null $skills
 * @property string|null $interests
 * @property string|null $note
 * @property string|null $file_cv
 * @property string|null $created
 * @property string|null $updated
 */
class RecruitmentForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recruitment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'img_avatar', 'birth', 'gender', 'address', 'tel', 'email'], 'required'],
            [['created', 'updated'], 'safe'],
            [['fullname', 'img_avatar', 'birth', 'gender', 'address', 'email', 'foreign_language', 'experience', 'skills', 'interests', 'note', 'file_cv'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fullname' => Yii::t('app', 'Fullname'),
            'img_avatar' => Yii::t('app', 'Img Avatar'),
            'birth' => Yii::t('app', 'Birth'),
            'gender' => Yii::t('app', 'Gender'),
            'address' => Yii::t('app', 'Address'),
            'tel' => Yii::t('app', 'Tel'),
            'email' => Yii::t('app', 'Email'),
            'foreign_language' => Yii::t('app', 'Foreign Language'),
            'experience' => Yii::t('app', 'Experience'),
            'skills' => Yii::t('app', 'Skills'),
            'interests' => Yii::t('app', 'Interests'),
            'note' => Yii::t('app', 'Note'),
            'file_cv' => Yii::t('app', 'File Cv'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }

    public function phoneValidate($attribute)
    {
        if (!preg_match('/^0[0-9]{9}$/', $this->$attribute)) {
            $this->addError($attribute, 'Bao gồm 10 ký tự số bắt đầu từ "0"');
        }
    }

}
