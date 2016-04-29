<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Servico */

$this->title = 'Update Servico: ' . $model->idservico;
$this->params['breadcrumbs'][] = ['label' => 'Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idservico, 'url' => ['view', 'id' => $model->idservico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
