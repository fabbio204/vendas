<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Subclasse */

$this->title = $model->idsubclasse;
$this->params['breadcrumbs'][] = ['label' => 'Subclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subclasse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idsubclasse], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idsubclasse], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idsubclasse',
            'nome',
            'classe_id',
        ],
    ]) ?>

</div>
