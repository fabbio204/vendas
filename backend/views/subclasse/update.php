<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Subclasse */

$this->title = 'Update Subclasse: ' . $model->idsubclasse;
$this->params['breadcrumbs'][] = ['label' => 'Subclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idsubclasse, 'url' => ['view', 'id' => $model->idsubclasse]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subclasse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
