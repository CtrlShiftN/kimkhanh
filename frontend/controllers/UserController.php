<?php

namespace frontend\controllers;

use Codeception\Module\Yii2;
use common\models\User;
use frontend\models\UserForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use frontend\models\ChangePasswordForm;

$cdnUrl = Yii::$app->params['frontend'];

class UserController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
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

    public function actionProfile()
    {
        $model = (new UserForm())::findOne(Yii::$app->user->identity->getId());
        if ($model->load(yii::$app->request->post())) {
                if($model->save(false)){
                    $this->goHome();
                }
            }

        return $this->render('profile', [
        'model' => $model
    ]);
    }

}


