<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use yii;
use yii\web\UploadedFile;

class UploadImageForm extends User
{
    public $avatar;

    public function rules()
    {
        return [
            [['avatar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->avatar->saveAs('uploads/avatar/' . $this->avatar->baseName . '.' .
                $this->avatar->extension);
        } else {
            return false;
        }
    }

}

?>