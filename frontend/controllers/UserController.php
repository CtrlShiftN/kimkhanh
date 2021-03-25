<?php

namespace frontend\controllers;

use frontend\models\UpdateForm;
use frontend\models\UserForm;
use Yii;
use frontend\models\PasswordForm;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;


$cdnUrl = Yii::$app->params['frontend'];

class UserController extends Controller
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
        if ($model->load(yii::$app->request->post()) && $model->validate()) {
            if ($model->save(false)) {
                $this->goBack();
            }
        }

        $change = new PasswordForm();
        if ($change->load(yii::$app->request->post()) && $change->validate()) {
            if ($change->changePassword()) {
                $this->goBack();
            }
        }

        $update = new UpdateForm();

        if (Yii::$app->request->isPost) {
            $update->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($update->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('profile', [
            'model' => $model,
            'change' => $change,
            'update' => $update,
        ]);
    }

}

