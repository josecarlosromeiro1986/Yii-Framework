<?php
die('contato');
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Contato';
?>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'nome'); ?>

<?php echo $form->field($model, 'assunto')->dropDownList([
    1 => 'Reclamação',
    2 => 'Sugestão',
    3 => 'Elogio',
], [
    'prompt' => '== Escolha o assunto ==',
]); ?>

<?php echo $form->field($model, 'email'); ?>

<?php echo $form->field($model, 'mensagem')->textarea([
    'placeholder' => 'Digite aqui a mensagem que será enviada por E-mail.',
    'rows' => 10,
]); ?>

<!-- <?php
echo Html::tag(
    'div',
    Html::tag(
        'div',
        $form->field($model, 'nome'),
        ['class' => 'col-md-4']
    ),
    ['class' => 'row']
);

echo Html::tag(
    'div',
    Html::tag(
        'div',
        $form->field($model, 'assunto')->dropDownList([
            1 => 'Reclamação',
            2 => 'Sugestão',
            3 => 'Elogio',
        ], [
            'prompt' => '== Escolha o assunto ==',
        ]),
        ['class' => 'col-md-4']
    ),
    ['class' => 'row']
);

echo Html::tag(
    'div',
    Html::tag(
        'div',
        $form->field($model, 'email'),
        ['class' => 'col-md-4']
    ),
    ['class' => 'row']
);

echo Html::tag(
    'div',
    Html::tag(
        'div',
        $form->field($model, 'mensagem')->textarea([
            'placeholder' => 'Digite aqui a mensagem que será enviada por E-mail.',
            'rows' => 10,
        ]),
        ['class' => 'col-md-4']
    ),
    ['class' => 'row']
);
?> -->

<div class='form-group'>
    <?php echo Html::submitButton('Enviar Dados', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
