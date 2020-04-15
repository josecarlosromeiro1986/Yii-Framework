<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Cadastro';
?>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'nome'); ?>

<?php echo $form->field($model, 'email'); ?>

<div class='form-group'>
    <?php echo Html::submitButton('Enviar Dados', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>