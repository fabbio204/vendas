<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AgendaBusca */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idagenda') ?>

    <?= $form->field($model, 'falou_com') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'data_lembrete') ?>

    <?= $form->field($model, 'vendedor_id') ?>

    <?php // echo $form->field($model, 'cliente_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
