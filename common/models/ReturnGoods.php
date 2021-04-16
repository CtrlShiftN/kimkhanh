<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "return_goods".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $phone
 * @property string|null $gmail
 * @property string|null $address
 * @property string|null $nameProduct
 * @property string|null $type
 * @property string|null $subject
 * @property string|null $content
 */
class ReturnGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'return_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'gmail', 'address', 'nameProduct', 'type', 'subject'], 'required', 'message' => 'Không được bỏ trống!'],
            [['phone'], 'smallInteger'],
            [['name', 'address', 'nameProduct', 'type', 'subject', 'content'], 'string', 'max' => 255],
            [['phone'], 'phoneValidate'],
            [['gmail'], 'email']
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
            'id' => Yii::t('app', 'ID'),
            'name' => 'Họ và tên',
            'phone' => 'Số điện thoại',
            'gmail' => 'Gmail',
            'address' => 'Địa chỉ',
            'nameProduct' => 'Tên sản phẩm',
            'type' => 'Loại',
            'subject' => 'Vấn đề chính bạn đang gặp phải',
            'content' => 'Nêu nguyên nhân chi tiết',
        ];
    }
}
