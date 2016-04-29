<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TabelaPreco */

$this->title = $model->idtabela_preco;
$this->params['breadcrumbs'][] = ['label' => 'Tabela Precos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabela-preco-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idtabela_preco], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idtabela_preco], [
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
            'idtabela_preco',
            'nome',
        ],
    ]) ?>

</div>
