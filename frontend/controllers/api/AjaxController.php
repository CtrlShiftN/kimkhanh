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
            'success' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'error' => 0,
            'error_code' => 0
        ];
        echo json_encode($respone);
    }

    public function actionProductSearchAjax() {
        // lay ve cac param
        $infProduct = ParamHelper::getParamValue("inf_product");
        // truy xuat tu db
        $rows = (new \yii\db\Query())->from('product')->where(['like','name', $infProduct])->all(); //arr
        $response = [
            'status' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'infProduct' => $infProduct,
            'product' => $rows       //tra ve arr
        ];

        echo json_encode($response);
        exit;
    }

    public function actionSearchCameraAjax() {
        // lay ve cac param
        $typeCam = ParamHelper::getParamValue("type_cam");
        $trademarkCam = ParamHelper::getParamValue("trademark_cam");
        // truy xuat tu db
        $rows = (new \yii\db\Query())->from('product')->where(['and',['like','category_id', $typeCam],['like','trademark',$trademarkCam]])->all(); //arr
        $response = [
            'status' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'camera' => $rows       //tra ve arr
        ];
        echo json_encode($response);
        exit;
    }

    public function actionSearchElevatorAjax() {
        // lay ve cac param
        $typeElevator = ParamHelper::getParamValue("type_elevator");
        $trademarkElevator = ParamHelper::getParamValue("trademark_elevator");
        // truy xuat tu db
        $rows = (new \yii\db\Query())->from('product')->where(['and',['like','category_id', $typeElevator],['like','trademark',$trademarkElevator]])->all(); //arr
        $response = [
            'status' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'elevator' => $rows       //tra ve arr
        ];
        echo json_encode($response);
        exit;
    }
}
