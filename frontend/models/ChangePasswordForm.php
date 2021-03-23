<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 * @property string|null $password_reset_token
 * @property string $name
 * @property string $email
 * @property string|null $tel
 * @property string $referral_code
 * @property int|null $role 0: user, 1: admin
 * @property string|null $created
 * @property string|null $updated
 * @property int|null $status 0: inactive, 1: active
 * @property string|null $avatar
 * @property string|null $banner
 * @property string|null $note
 */
class ChangePasswordForm extends Model
{
    public $old_password;
    public $new_password;
    public $repeat_password;

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'tel' => Yii::t('app', 'Tel'),
            'referral_code' => Yii::t('app', 'Referral Code'),
            'role' => Yii::t('app', 'Role'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'status' => Yii::t('app', 'Status'),
            'avatar' => Yii::t('app', 'Avatar'),
            'banner' => Yii::t('app', 'Banner'),
            'note' => Yii::t('app', 'Note'),
        ];
    }


    //Define the rules for old_password, new_password and repeat_password with changePwd Scenario.

    public function rules()
    {
        return array(
            array('old_password, new_password, repeat_password', 'required', 'on' => 'changePwd'),
            array('old_password', 'findPasswords', 'on' => 'changePwd'),
            array('repeat_password', 'compare', 'compareAttribute'=>'new_password', 'on'=>'changePwd'),
        );
    }


    //matching the old password with your existing password.
    public function findPasswords($attribute, $params)
    {
        $user = User::model()->findByPk(Yii::app()->user->id);
        if ($user->password != md5($this->old_password))
            $this->addError($attribute, 'Old password is incorrect.');
    }
}
