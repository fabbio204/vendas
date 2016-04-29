<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UnidadeVenda */

$this->title = 'Create Unidade Venda';
$this->params['breadcrumbs'][] = ['label' => 'Unidade Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidade-venda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
