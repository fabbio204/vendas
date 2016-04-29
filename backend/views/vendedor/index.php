<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\VendedorBusca */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendedor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vendedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idvendedor',
            'nome',
            'telefone1',
            'telefone2',
            'telefone3',
            // 'email:email',
            // 'logadouro',
            // 'numero',
            // 'complemento',
            // 'cep',
            // 'cidade',
            // 'bairro',
            // 'estado',
            // 'cpf',
            // 'rg',
            // 'data_nascimento',
            // 'sexo',
            // 'comentario:ntext',
            // 'idusuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
