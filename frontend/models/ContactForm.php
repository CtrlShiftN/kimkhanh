<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $phone;
    public $reason;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'reason', 'body', 'phone'], 'required', 'message' => '*Cannot be blank!',],
            // email has to be a valid email address
            ['email', 'email'],
            ['phone', 'string'],
            [['phone'], 'phoneValidate'],
        ];
    }

    public function phoneValidate($attribute)
    {
        if (!preg_match('/^0[0-9]{9}$/', $this->$attribute)) {
            $this->addError($attribute, 'Bao gồm 10 ký tự số bắt đầu từ "0"');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Họ và Tên',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'subject' => 'Chủ đề',
            'body' => 'Nội dung chi tiết',
        ];
    }
}
