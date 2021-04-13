<?php

namespace frontend\models;

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
class ContactForm extends \yii\db\ActiveRecord
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
            [['name', 'subject', 'content', 'email', 'phone'], 'required', 'message'=>'*Trường nhập không dược phép bỏ trống'],
            [['phone'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'subject', 'content'], 'string', 'max' => 255],
            [['email'], 'email'],
            [['phone'], 'phoneValidate']

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

    public function phoneValidate($attribute)
    {
        if (!preg_match('/^0[0-9]{9}$/', $this->$attribute)) {
            $this->addError($attribute, 'Bao gồm 10 ký tự số bắt đầu từ "0"');
        }
    }

    public function saveContactData()
    {
        $contactModel = new ContactForm();
        $contactModel -> name = $this->name;
        $contactModel -> email = $this->email;
        $contactModel -> phone = $this->phone;
        $contactModel -> subject = $this->subject;
        $contactModel -> content = $this->content;
        $contactModel -> created = date('Y-m-d H:i:s');
        $contactModel -> updated = date('Y-m-d H:i:s');
        return $contactModel ->save();
    }
}
