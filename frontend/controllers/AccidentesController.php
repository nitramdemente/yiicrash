<?php

namespace frontend\controllers;

use Yii;
use app\models\Accidente;
use app\models\AccidenteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\base\ErrorException;

/**
 * AccidenteController implements the CRUD actions for Accidente model.
 */
class AccidentesController extends ActiveController
{
    
    public $modelClass='app\models\Accidente';

    public function actions()
    {
        $actions = parent::actions();
        return $actions;
    }

    public function actionCreate()
    {
        $model = new Foto();
        if($model->load(Yii::$app->getRequest()->getBodyParams(),'')){
            if($user = $model->id)
            {

            }
        }
        return $model;
    }
}
