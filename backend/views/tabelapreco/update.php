<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TabelaPreco */

$this->title = 'Update Tabela Preco: ' . $model->idtabela_preco;
$this->params['breadcrumbs'][] = ['label' => 'Tabela Precos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtabela_preco, 'url' => ['view', 'id' => $model->idtabela_preco]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tabela-preco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
