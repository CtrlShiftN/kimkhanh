<?php

namespace frontend\controllers;

use frontend\models\DocumentSearch;
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

}
