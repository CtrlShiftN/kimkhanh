<?php

namespace frontend\models;

use common\models\Category;
use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int|null $type 1:camera, 2:elevator
 * @property int|null $code
 * @property string|null $name
 * @property string|null $slug
 * @property int|null $status 0:inactive; 1:active
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $note
 */
class CategorySearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'code', 'status'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'slug', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', '1:camera, 2:elevator'),
            'code' => Yii::t('app', 'Code'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'status' => Yii::t('app', '0:inactive; 1:active'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'note' => Yii::t('app', 'Note'),
        ];
    }

    public function getCameraTypeProduct()
    {
        return Category::find()->where(["type" => 1])->asArray()->all();
    }

    public function getElevatorTypeProduct() {
        return Category::find()->where(["type"=>2])->asArray()->all();
    }
}
