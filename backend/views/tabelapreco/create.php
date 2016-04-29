<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TabelaPreco */

$this->title = 'Create Tabela Preco';
$this->params['breadcrumbs'][] = ['label' => 'Tabela Precos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabela-preco-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
