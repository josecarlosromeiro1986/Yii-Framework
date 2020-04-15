<?php

namespace app\models;

use Yii;
use yii\base\Model;
die('model');
class FormularioDeContato extends Model
{
    public $nome;
    public $assunto;
    public $email;
    public $mensagem;

    public function attributeLabels()
    {
        return [
            'nome' => 'Nome Completo',
            'assunto' => 'Assunto',
            'email' => 'Endereço de E-mail',
            'mensagem' => 'Mensagem',
        ];
    }

    public function rules()
    {
        return [
            [['nome', 'assunto', 'email', 'mensagem'], 'required'],
            ['email', 'email'],
            //[['nome', 'email'], 'string', 'length' => [3, 150]],
            //['nome', 'number'],
        ];
    }
}
