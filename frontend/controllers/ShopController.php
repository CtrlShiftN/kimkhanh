<?php

namespace frontend\controllers;

use frontend\models\CategorySearch;
use frontend\models\TrademarkSearch;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ShopController extends \yii\web\Controller
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

    /**
     * @return string
     */
    public function actionError()
    {
        $this->layout = 'error';
        return $this->render('error');
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
     */
    public function actionIndex()
    {
        $searchModelCategory = new CategorySearch();
        $searchModelTrademark = new TrademarkSearch();

        $arrProduct = ["Camera", "Thang máy", "Bộ điều khiển"];
        $arrType = (new CategorySearch())->getAllType();

        //get type of product
        $arrCameraType = $searchModelCategory->getCameraTypeProduct();
        $arrElevatorType = $searchModelCategory->getElevatorTypeProduct();
        $arrRecorderType = $searchModelCategory->getRecorderTypeProduct();
        //get trademark of product
        $arrTrademark = $searchModelTrademark->getAllTrademark();
        $arrTrademarkOfCamera = $searchModelTrademark->getTrademarkOfCamera();
        $arrTrademarkOfElevator = $searchModelTrademark->getTrademarkOfElevator();
        $arrTrademarkOfRecorder = $searchModelTrademark->getTrademarkOfRecorder();
        return $this->render('index', [
            'arrProduct' => $arrProduct,

            'type' => $arrType,
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
