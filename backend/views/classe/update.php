<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Classe */

$this->title = 'Update Classe: ' . $model->idclasse;
$this->params['breadcrumbs'][] = ['label' => 'Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idclasse, 'url' => ['view', 'id' => $model->idclasse]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
