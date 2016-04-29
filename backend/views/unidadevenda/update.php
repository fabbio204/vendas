<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UnidadeVenda */

$this->title = 'Update Unidade Venda: ' . $model->idunidade_venda;
$this->params['breadcrumbs'][] = ['label' => 'Unidade Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idunidade_venda, 'url' => ['view', 'id' => $model->idunidade_venda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidade-venda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
