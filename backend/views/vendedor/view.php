<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Vendedor */

$this->title = $model->idvendedor;
$this->params['breadcrumbs'][] = ['label' => 'Vendedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendedor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idvendedor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idvendedor], [
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
            'idvendedor',
            'nome',
            'telefone1',
            'telefone2',
            'telefone3',
            'email:email',
            'logadouro',
            'numero',
            'complemento',
            'cep',
            'cidade',
            'bairro',
            'estado',
            'cpf',
            'rg',
            'data_nascimento',
            'sexo',
            'comentario:ntext',
            'idusuario',
        ],
    ]) ?>

</div>
