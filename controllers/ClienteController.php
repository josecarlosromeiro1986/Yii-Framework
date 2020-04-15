<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\FormularioDeCadastro;

class ClienteController extends Controller
{
    public function actionCadastro()
    {
        $model = new FormularioDeCadastro();
        
        if($model->load(Yii::$app->request->post()) &&  $model->validate())
        {
            return $this->render('confirma', [
                'model' => $model,
            ]);
        } else 
        {
            return $this->render('cadastro', [
                'model' => $model,
            ]);
        }
    }
}