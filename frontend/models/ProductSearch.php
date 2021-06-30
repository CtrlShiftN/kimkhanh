<?php

namespace frontend\models;

use common\components\SystemConstant;
use common\models\Product;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property int|null $status 0: inactive; 1: active
 * @property string|null $created
 * @property string|null $updated
 * @property int|null $category_id
 * @property string|null $trade_mark
 * @property string|null $avatar
 * @property string|null $images
 * @property string|null $description_html
 * @property string|null $description
 * @property string|null $code
 * @property string|null $selling_price
 * @property string|null $discount_percent
 * @property int|null $is_discount 0:no; 1:yes
 */
class ProductSearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'category_id', 'is_discount'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['description_html', 'description'], 'string'],
            [['name', 'slug', 'trade_mark', 'avatar', 'images', 'code', 'selling_price', 'discount_percent'], 'string', 'max' => 255],
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
            'slug' => Yii::t('app', 'Slug'),
            'status' => Yii::t('app', '0: inactive; 1: active'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'category_id' => Yii::t('app', 'Category ID'),
            'trade_mark' => Yii::t('app', 'Trade Mark'),
            'avatar' => Yii::t('app', 'Avatar'),
            'images' => Yii::t('app', 'Images'),
            'description_html' => Yii::t('app', 'Description Html'),
            'description' => Yii::t('app', 'Description'),
            'code' => Yii::t('app', 'Code'),
            'selling_price' => Yii::t('app', 'Selling Price'),
            'discount_percent' => Yii::t('app', 'Discount Percent'),
            'is_discount' => Yii::t('app', '0:no; 1:yes'),
        ];
    }

    public function getAllProduct($cursor = 0)
    {
        return Product::find()->where(['status' => 1]);
    }

    public function getProductById($productId)
    {
        return Product::find()->where(['id' => $productId, 'status' => 1])->asArray()->one();
    }
}
