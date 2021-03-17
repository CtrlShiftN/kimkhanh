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
        [['name', 'email', 'subject', 'reason', 'body', 'phone'], 'required', 'message'=>'*Cannot be blank!',],
        // email has to be a valid email address
        ['email', 'email'],
        ['phone', 'string'],
        [['phone'], 'phoneValidate'],
    ];
}
    public function phoneValidate($attribute)
{
    if (!preg_match('/^[0-9]{10}$/', $this->$attribute)) {
        $this->addError($attribute, '*Phone number is invalid!');
    }
}
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
{

}
}
