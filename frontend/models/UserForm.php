<?php

namespace frontend\models;

use common\models\User;
use Yii;
use yii\rbac\Rule;

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
class UserForm extends User
{
    public $oldPassword;
    public $newPassword;


    public function rules()
    {
        return [
            [['username', 'password', 'name', 'email', 'referral_code'], 'required'],
            [['role', 'status'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['username', 'password', 'password_reset_token', 'name', 'email', 'referral_code', 'avatar', 'banner', 'note'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['tel'], 'string', 'max' => 12],
            [['username'], 'unique'],
            [['referral_code'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array([
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
            'oldPassword' => 'Mật khẩu',
            'newPassword' => 'Mật khẩu mới',
            'repeatNewPassword' => 'Mật khẩu mới',
        ]);
    }

    public function changePassword(){
        $model = User::findOne(Yii::$app->user->getId());
        $model->setPassword($this->newPassword);
        $model->updated = date('Y-m-d H:i:s');
        return $model->save(false);
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
}
