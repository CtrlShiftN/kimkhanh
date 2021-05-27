<?php

namespace frontend\controllers;

use common\components\encrypt\CryptHelper;
use common\models\Category;
use frontend\models\CategorySearch;
use frontend\models\DocumentSearch;
use frontend\models\ProductSearch;
use frontend\models\RecommendSearch;
use frontend\models\TrademarkSearch;
use yii\base\BaseObject;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ToolController extends \yii\web\Controller
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
    public function actionDownload()
    {
        $searchModel = new DocumentSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
        return $this->render('download', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Show all recommend from db
     * @return string
     * @author QuyenNV
     */
    public function actionRecommend()
    {
        $searchModel = new RecommendSearch();
        $arrRecommend = $searchModel->getAllRecommend();
        return $this->render('recommend', [
            'arrRecommend' => $arrRecommend
        ]);
    }

    /**
     * Show recommend details by id
     * @return string|\yii\web\Response
     */
    public function actionRecommendDetail()
    {
        $searchModel = new RecommendSearch();
        if (isset($_REQUEST['detail'])) {
            $detailID = $_REQUEST['detail'];
            $detailID = CryptHelper::decryptString($detailID);
            $recommendDetail = $searchModel->getRecommendById($detailID);
            if (!empty($recommendDetail)) {
                return $this->render('recommend_detail', [
                    'recommendDetail' => $recommendDetail
                ]);
            } else {
                return $this->redirect('recommend');
            }
        } else {
            return $this->redirect('recommend');
        }
    }
}
