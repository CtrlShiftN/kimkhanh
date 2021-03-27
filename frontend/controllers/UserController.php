<?php

namespace frontend\controllers;

use frontend\models\UploadImageForm;
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
    public $avatar;
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
        $userModel = (new UserForm())::findOne(Yii::$app->user->identity->getId());
        if ($userModel->load(yii::$app->request->post()) && $userModel->validate()) {
            if ($userModel->save(false)) {
                $this->goBack();
            }
        }

        $uploadAvatar = new UploadImageForm();
        if (Yii::$app->request->isPost) {
            $uploadAvatar->image = UploadedFile::getInstance($uploadAvatar, 'image');
            if ($uploadAvatar->upload()) {
                $this->goHome();
                return $uploadAvatar->image;
            }
        }

        $changePassword = new PasswordForm();
        if ($changePassword->load(yii::$app->request->post()) && $changePassword->validate()) {
            if ($changePassword->changePassword()) {
                $this->goBack();
            }
        }


        return $this->render('profile', [
            'userModel' => $userModel,
            'uploadAvatar' => $uploadAvatar,
            'changePassword' => $changePassword,
        ]);
    }

}

