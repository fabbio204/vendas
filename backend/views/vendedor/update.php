<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Vendedor */

$this->title = 'Update Vendedor: ' . $model->idvendedor;
$this->params['breadcrumbs'][] = ['label' => 'Vendedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idvendedor, 'url' => ['view', 'id' => $model->idvendedor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vendedor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
