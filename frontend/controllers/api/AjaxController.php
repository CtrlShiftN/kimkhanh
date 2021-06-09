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
        $infProduct = CryptHelper::decryptString("inf_product");
        $rows = (new \yii\db\Query())->from('product')->where(['and',['like','name', $infProduct],'status'=>1])->all(); //arr
        $response = [
            'status' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'infProduct' => $infProduct,
            'product' => $rows
        ];

        echo json_encode($response);
        exit;
    }

    public function actionProductFilterAjax() {
        $type = CryptHelper::decryptString("type");
        $dataCb= CryptHelper::decryptString("dataCb");
        $rows = (new \yii\db\Query())->from('product');
        if (!isEmpty($type)) {
            if ($type==0){
                $rows->where(['type'=> '']);
            } else {
                $rows->where(['type' => $type]);
            }
        }
        print_r($dataCb);
        $rows->andWhere(["status"=>1])->all();
        //TODO: check rows sau do tra ve cho tung ket qua cua truy van
        if (isEmpty($rows)){
            $response = [
                'status' => SystemConstant::HOPE_API_UNSUCCESS_STATUS,
            ];
        }
        $response = [
            'status' => SystemConstant::HOPE_API_SUCCESS_STATUS,
            'product' => $rows
        ];
        echo json_encode($response);
        exit;
    }
}
