<?php

namespace frontend\models;

use common\models\Trademark;
use Yii;

/**
 * This is the model class for table "trademark".
 *
 * @property int $id
 * @property int|null $type 1:Camera; 2: Thang may
 * @property string|null $trade_mark
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
            [['type'], 'integer'],
            [['trade_mark'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', '1:Camera; 2: Thang may'),
            'trade_mark' => Yii::t('app', 'Trade Mark'),
        ];
    }

    public function getTrademarkOfCamera() {
        return Trademark::find()->where(['type'=>1])->asArray()->all();
    }

    public function getTrademarkOfElevator() {
        return Trademark::find()->where(['type'=>2])->asArray()->all();
    }
}
