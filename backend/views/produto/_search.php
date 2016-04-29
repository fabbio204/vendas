<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoBusca */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idproduto') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'fabricante_id') ?>

    <?php // echo $form->field($model, 'subclasse_id') ?>

    <?php // echo $form->field($model, 'unidade_venda_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
