<?php

namespace frontend\controllers\api;

use common\components\encrypt\CryptHelper;
use common\components\helpers\HeaderHelper;
use common\components\helpers\ParamHelper;
use common\components\SystemConstant;
use Yii;
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

    /**
     * query data from database with ajax & return data to Shop view
     */
    public function actionProductFilterAjax()
    {
        $keyword = ParamHelper::getParamValue("keyword");
        $getType = ParamHelper::getParamValue('type');
        $getTrademark = ParamHelper::getParamValue("trademark");
        $getCategory = ParamHelper::getParamValue("category");
        $sort = ParamHelper::getParamValue('sort');
        $priceFrom = intval(ParamHelper::getParamValue('priceFrom'));
        $priceTo = intval(ParamHelper::getParamValue('priceTo'));
        $getCursor = ParamHelper::getParamValue('cursor');

        $rows = (new \yii\db\Query())->from('product');

        $rows->where(["status" => 1]);
        if (!empty($keyword)) {
            $rows->where(['like', 'name', $keyword]);
        }

        if (!empty($getType)) {
            $type = CryptHelper::decryptAllElementInArray(explode(",", $getType));
            $rows->andWhere(['type' => $type]);
        }

        if (!empty($getTrademark)) {
            $trademark = CryptHelper::decryptAllElementInArray(explode(",", $getTrademark));
            $rows->andWhere(['trade_mark' => $trademark]);
        };

        if (!empty($getCategory)) {
            $category = CryptHelper::decryptAllElementInArray(explode(",", $getCategory));
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
        } else if (empty($priceFrom) && !empty($priceTo)) {
            $rows->andWhere(['<', 'selling_price', $priceTo]);
        }

        $count = count($rows->all());

        if (!empty($getCursor)) {
            $limit = SystemConstant::LIMIT_PER_PAGE;
            $offset = intval($getCursor) * $limit;
            $rows->limit($limit)->offset($offset);
        } else {
            $rows->limit(SystemConstant::LIMIT_PER_PAGE)->offset(0);
        }

        $result = $rows->all();

        $arrProduct = [];
        foreach ($result as $key => $value) {
            $arrProduct[$key] = $value;
            $arrProduct[$key]['id'] = CryptHelper::encryptString($value['id']);
        }

        if (empty($result)) {
            $response = [
                'status' => SystemConstant::API_UNSUCCESS_STATUS,
                'notify' => 'Không có sản phẩm để hiển thị!'
            ];
        } else {
            $response = [
                'status' => SystemConstant::API_SUCCESS_STATUS,
                'product' => $arrProduct,
                'count' => $count
            ];
        }
        echo json_encode($response);
        exit;
    }
}
