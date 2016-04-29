<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Subclasse */

$this->title = 'Create Subclasse';
$this->params['breadcrumbs'][] = ['label' => 'Subclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subclasse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
