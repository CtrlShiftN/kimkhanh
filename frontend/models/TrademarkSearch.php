<?php

namespace frontend\models;

use common\models\Trademark;
use Yii;

/**
 * This is the model class for table "trademark".
 *
 * @property int $id
 * @property int|null $type 1:camera; 2:elevator
 * @property string|null $name
 * @property string|null $created
 * @property string|null $updated
 * @property int|null $status
 */
class TrademarkSearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trademark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'status'], 'integer'],
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
            'type' => Yii::t('app', '1:camera; 2:elevator'),
            'name' => Yii::t('app', 'Name'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getAllTrademark() {
        return Trademark::find()->where(['status' => 1])->asArray()->all();
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getTrademarkOfCamera() {
        return Trademark::find()->where(['type'=>1])->andWhere(['status' => 1])->asArray()->all();
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getTrademarkOfElevator() {
        return Trademark::find()->where(['type'=>2])->andWhere(['status' => 1])->asArray()->all();
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getTrademarkOfRecorder() {
        return Trademark::find()->where(['type'=>3])->andWhere(['status' => 1])->asArray()->all();
    }
}
