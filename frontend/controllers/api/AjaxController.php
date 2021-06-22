<?php

namespace frontend\controllers\api;

use common\components\encrypt\CryptHelper;
use common\components\helpers\HeaderHelper;
use common\components\helpers\ParamHelper;
use common\components\SystemConstant;
use Yii;
use yii\db\conditions\InCondition;
use yii\db\conditions\OrCondition;
use yii\rest\ActiveController;

class AjaxController extends ActiveController
{
    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        // Inherit innit
//        parent::init();
        // Action để handle các lỗi phát sinh dưới dạng json
        Yii::$app->errorHandler->errorAction = 'api/error/print-json';
    }

    public function beforeAction($action)
    {
        // only allow some domain to access this
        HeaderHelper::getHeaderAccessControlAllowOrigin();
        // avoid csrf validation
//        if ($this->action->id == 'action-name') {
//            $this->enableCsrfValidation = false;
//        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $respone = [
            'success' => SystemConstant::API_SUCCESS_STATUS,
            'error' => 0,
            'error_code' => 0
        ];
        echo json_encode($respone);
    }

    public function actionProductSearchAjax()
    {
        $infProduct = ParamHelper::getParamValue("inf_product");
        $rows = (new \yii\db\Query())->from('product')->where(['like', 'name', $infProduct])->andWhere(['status' => 1])->all();
        if (empty($rows)) {
            $response = [
                'status' => SystemConstant::API_UNSUCCESS_STATUS,
                'notify' => 'Không có sản phẩm để hiển thị!'
            ];
        } else {
            $response = [
                'status' => SystemConstant::API_SUCCESS_STATUS,
                'product' => $rows
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function actionProductFilterAjax()
    {
        $getType = ParamHelper::getParamValue('type');
        $getTrademark = ParamHelper::getParamValue("trademark");
        $getCategory = ParamHelper::getParamValue("category");
        $sort = ParamHelper::getParamValue('sort');
        $priceFrom = ParamHelper::getParamValue('priceFrom');
        $priceTo = ParamHelper::getParamValue('priceTo');

        $rows = (new \yii\db\Query())->from('product');
        if (empty($getType)) {
            if (!empty($getTrademark)) {
                $convertTrademark = explode(",", $getTrademark);
                $trademark = CryptHelper::decryptAllElementInArray($convertTrademark);
                $rows->where(['trade_mark' => $trademark]);
            };
        } else {
            $convertType = explode(",", $getType);
            $type = CryptHelper::decryptAllElementInArray($convertType);
            $rows->where(['type' => $type]);
            if (!empty($getTrademark)) {
                $convertTrademark = explode(",", $getTrademark);
                $trademark = CryptHelper::decryptAllElementInArray($convertTrademark);
                $rows->andWhere(['trade_mark' => $trademark]);
            };
        };

        if (!empty($getCategory)) {
            $convertCategory = explode(",", $getCategory);
            $category = CryptHelper::decryptAllElementInArray($convertCategory);
            $rows->andWhere(['category_id' => $category]);
        };

        if (!empty($sort)) {
            if ($sort == 1) {
                $rows->orderBy("selling_price ASC");
            } else if ($sort == 2) {
                $rows->orderBy('selling_price DESC');
            } else {
                $rows->orderBy("updated DESC");
            }
        }

        if (!empty($priceFrom) && !empty($priceTo)) {
            $rows->andWhere(['between', 'selling_price', $priceFrom, $priceTo]);
        } elseif (!empty($priceFrom) && empty($priceTo)) {
            $rows->andWhere(['>', 'selling_price', $priceFrom]);
        } elseif (empty($priceFrom) && !empty($priceTo)) {
            $rows->andWhere(['<', 'selling_price', $priceFrom]);
        }

        $rows->andWhere(["status" => 1]);

        $result = $rows->all();
        if (empty($result)) {
            $response = [
                'status' => SystemConstant::API_UNSUCCESS_STATUS,
                'notify' => 'Không có sản phẩm để hiển thị!'
            ];
        } else {
            $response = [
                'status' => SystemConstant::API_SUCCESS_STATUS,
                'product' => $result,
                'count' => count($result)
            ];
        }
        echo json_encode($response);
        exit;
    }
}
