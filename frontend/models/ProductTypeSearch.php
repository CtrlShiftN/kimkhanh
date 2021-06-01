<?php

namespace frontend\models;

use common\models\ProductType;
use Yii;

/**
 * This is the model class for table "product_type".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $created
 * @property string|null $updated
 */
class ProductTypeSearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created', 'updated'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }

    public function getAllType()
    {
        return ProductType::find()->where(['status'=>1])->asArray()->all();
    }
}
