<?php

namespace backend\controllers\api;

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
            'success' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'error' => 0,
            'error_code' => 0
        ];
        echo json_encode($respone);
    }

    public function actionTestAjax(){
        // lay ve cac param
        $infProduct = ParamHelper::getParamValue("inf_product");
        // truy xuat tu db
        $rows = (new \yii\db\Query())->from('product')->where(['like', 'name', $infProduct])->all();
        $response = [
            'status' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'infProduct' => $infProduct,
            'product' => $rows
        ];

        echo json_encode($response);
        exit;
    }
}
