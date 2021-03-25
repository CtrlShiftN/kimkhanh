<?php

namespace frontend\models;

use common\models\User;
use Yii;
use yii\base\Exception;
use yii\base\Model;

class PasswordForm extends Model
{
    public $oldPassword;
    public $newPassword;
    public $repeatNewPassword;

    public function rules()
    {
        return [
            [['oldPassword', 'newPassword', 'repeatNewPassword'], 'required', 'message'=>'{attribute} không được để trống'],
            ['oldPassword', 'findPasswords'],
            ['repeatNewPassword', 'compare', 'compareAttribute' => 'newPassword','message'=>'Mật khẩu không giống'],
        ];
    }

    public function findPasswords($attribute, $params)
    {
        $user = User::find()->where([
            'username' => Yii::$app->user->identity->username
        ])->one();
        $password = $user->password;
        if ($password != $this->oldPassword)
            $this->addError($attribute, 'Mật khẩu không đúng!');
    }

    public function attributeLabels()
    {
        return [
            'oldPassword' => 'Mật khẩu',
            'newPassword' => 'Mật khẩu mới',
            'repeatNewPassword' => 'Mật khẩu mới',
        ];
    }

    public function changePassword(){
        $model = User::findOne(Yii::$app->user->getId());
        $model->setPassword($this->newPassword);
        $model->updated = date('Y-m-d H:i:s');
        return $model->save(false);
    }

}