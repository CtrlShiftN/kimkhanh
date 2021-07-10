<?php
namespace frontend\controllers\api;

use Yii;
use yii\base\UserException;
use yii\db\Exception;
use yii\web\Controller;
use common\components\SystemConstant;
use yii\web\HttpException;

/**
 * Xử lý error, in ra lỗi
 */
class ErrorController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [];
    }

    /**
     * Index
     *
     * @return string
     */
    public function actionIndex()
    {
        return;

    }

    /**
     * In ra lỗi dưới dạng json
     *
     * @return string
     */
    public function actionPrintJson()
    {
        // Lấy exception
        if (($exception = Yii::$app->getErrorHandler()->exception) === null) {
            // action has been invoked not from error handler, but by direct route, so we display '404 Not Found'
            $exception = new HttpException(404, Yii::t('yii', 'Page not found.'));
        }

        if ($exception instanceof HttpException) {
            $code = $exception->statusCode;
        } else {
            $code = $exception->statusCode ? :500;
        }
        if ($exception instanceof Exception) {
            $name = $exception->getName();
        } else {
            $name = Yii::t('yii', 'Error');
        }
        if ($code) {
            $name .= " (#$code)";
        }

        if ($exception instanceof UserException) {
            $message = $exception->getMessage();
        } else {
            $message =  Yii::t('yii', 'An internal server error occurred.');
        }

        // In ra lỗi dưới dạng json
        echo json_encode([
            'status' => SystemConstant::HOPE_API_UNSUCCESS_STATUS,
            'error_code' => $code,
            'error_message' => $exception
        ], JSON_PRETTY_PRINT);
        return;
    }
}
