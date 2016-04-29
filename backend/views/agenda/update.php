<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */

$this->title = 'Update Agenda: ' . $model->idagenda;
$this->params['breadcrumbs'][] = ['label' => 'Agendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idagenda, 'url' => ['view', 'id' => $model->idagenda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agenda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
