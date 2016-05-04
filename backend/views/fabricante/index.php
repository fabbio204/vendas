<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FabricanteBusca */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fabricantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fabricante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Novo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="x_panel">
        
    <?php
    Pjax::begin();
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'nome',
            [
                'attribute'=>'link',
                
                // Formatando o link
                'value'=>function($model){
                    return Html::a($model->link,$model->link,['target'=>'_blank']);
                },
                'format'=> 'raw'
            ],
            [
                'header' => 'Ações',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{detalhes}{editar}{excluir}',
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'detalhes') {
                        $url = Url::toRoute(['fabricante/detalhes', 'id' => $model->idfabricante]);
                        return $url;
                    }
                    if ($action === 'editar') {
                        $url = Url::toRoute(['fabricante/editar', 'id' => $model->idfabricante]);
                        return $url;
                    }
                    if ($action === 'excluir') {
                        $url = Url::toRoute(['fabricante/excluir', 'id' => $model->idfabricante]);
                        return $url;
                    }
                },
                'buttons' => [
                    'detalhes' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;', 'javascript:;', ['data-href'=>$url,'class'=>'abrir-modal','title' => 'Detalhes']);
                    },
                    'editar' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;', $url, ['title' => 'Editar']);
                    },
                    'excluir' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;', 'javascript:;', ['data-href'=>$url,'class'=>'abrir-modal','title' => 'Excluir']);
                    },
                ]
            ],
        ],
    ]);
    Pjax::end();
    ?>
    </div>
</div>