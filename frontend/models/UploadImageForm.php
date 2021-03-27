<?php

namespace frontend\models;
use common\models\User;
use yii\base\Model;
use yii;

class UploadImageForm extends User {
    public $image;
    public function rules() {
        return [
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png'],
        ];
    }
    public function upload() {
        if ($this->validate()) {
            $this->image->saveAs('uploads/avatar/' . $this->image->baseName . '.' .
                $this->image->extension);

            return true;
        } else {
            return false;
        }
    }


}
?>