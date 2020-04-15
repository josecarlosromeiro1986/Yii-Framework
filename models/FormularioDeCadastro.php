<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FormularioDeCadastro extends Model
{
    public $nome;
    public $assunto;
    public $email;
    public $mensagem;

    public function attributeLabels()
    {
        return [
            'nome' => 'Nome Completo',
            'email' => 'Endereço de E-mail',
        ];
    }

    public function rules()
    {
        return [
            [['nome', 'email'], 'required'],
            ['email', 'email'],
            //[['nome', 'email'], 'string', 'length' => [3, 150]],
            //['nome', 'number'],
        ];
    }
}
