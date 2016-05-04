<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fabricante */

$this->title = 'Editar Fabricante: ' . $model->idfabricante;
$this->params['breadcrumbs'][] = ['label' => 'Fabricantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idfabricante, 'url' => ['view', 'id' => $model->idfabricante]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fabricante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
