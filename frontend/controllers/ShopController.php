<?php

namespace frontend\controllers;

use common\components\helpers\ParamHelper;
use common\components\SystemConstant;
use frontend\models\CategorySearch;
use frontend\models\DocumentSearch;
use frontend\models\ProductSearch;
use frontend\models\TestForm;
use frontend\models\TrademarkSearch;
use yii\base\BaseObject;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class TestController extends \yii\web\Controller
{
    /**
     * @return array[]
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['POST', 'GET'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function beforeAction($action)
    {
        $this->layout = 'v1';
        if (!parent::beforeAction($action)) {
            return false;
        }
        return true; // or false to not run the action
    }

    /**
     * @return string
     *
     * Show a list of downloadable contents
     * @author QuyenNV
     */

    public function actionShop()
    {
        $searchModelProduct = new ProductSearch();
        $searchModelCategory = new CategorySearch();
        $searchModelTrademark = new TrademarkSearch();

        $cursor = ParamHelper::getParamValue('page');
        $arrProduct = ["Camera", "Thang máy", "Bộ điều khiển"];
        $arrType = (new CategorySearch())->getAllType();
        //show representative product when entering page
        $arrAllProduct = $searchModelProduct->getAllProduct();

        $count = count($arrAllProduct->asArray()->all());
        $pages = new Pagination(['totalCount' => $arrAllProduct->count(), 'defaultPageSize' => SystemConstant::LIMIT_PER_PAGE]);
        $arrAllProduct = $arrAllProduct->offset($cursor)
            ->limit(SystemConstant::LIMIT_PER_PAGE)
            ->asArray()
            ->all();
        //get type of product
        $arrCameraType = $searchModelCategory->getCameraTypeProduct();
        $arrElevatorType = $searchModelCategory->getElevatorTypeProduct();
        $arrRecorderType = $searchModelCategory->getRecorderTypeProduct();
        //get trademark of product
        $arrTrademark = $searchModelTrademark->getAllTrademark();
        $arrTrademarkOfCamera = $searchModelTrademark->getTrademarkOfCamera();
        $arrTrademarkOfElevator = $searchModelTrademark->getTrademarkOfElevator();
        $arrTrademarkOfRecorder = $searchModelTrademark->getTrademarkOfRecorder();
        return $this->render('shop', [
            'arrProduct' => $arrProduct,

            'type' => $arrType,
            'arrAllProduct' => $arrAllProduct,
            'pages' => $pages,
            'count' => $count,
            'arrCameraType' => $arrCameraType,
            'arrElevatorType' => $arrElevatorType,
            'arrRecorderType' => $arrRecorderType,

            'arrTrademark' => $arrTrademark,
            'arrTrademarkOfCamera' => $arrTrademarkOfCamera,
            'arrTrademarkOfElevator' => $arrTrademarkOfElevator,
            'arrTrademarkOfRecorder' => $arrTrademarkOfRecorder
        ]);
    }
}