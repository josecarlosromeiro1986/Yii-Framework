<?php

namespace app\controllers;
die('controller');
use Yii;
use yii\web\Controller;
use app\models\FormularioDeContato;

class ContatoController extends Controller
{
    public function actionContato()
    {
        $model = new FormularioDeContato();

        if($model->load(Yii::$app->request->post()) &&  $model->validate())
        {
            return $this->render('confirma', [
                'model' => $model,
            ]);
        } else 
        {
            return $this->render('contato', [
                'model' => $model,
            ]);
        }
    }
}