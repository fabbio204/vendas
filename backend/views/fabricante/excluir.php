<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model backend\models\Fabricante */

$this->title = 'Fabricante';
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tem certeza que deseja excluir?</h4>
        </div>
        <div class="modal-body">
            <p><b>Nome:</b> <?= $model->nome ?></p>
            <p><b>Link:</b> <?= Html::a($model->link,$model->link,['target'=>'_blank'])?></p>            
        </div>
        <div class="modal-footer">
            <?php
            $formaulario = ActiveForm::begin();
            echo $formaulario->field($model, 'idfabricante')->hiddenInput()->label(false);;
            //echo Html::submitButton('Excluir',['class'=>'btn btn-danger']);
            echo '<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>';
            echo '<button type="submit" class="btn btn-danger" >Excluir</button>';
            $formaulario->end();
            ?>            
        </div>
    </div>
</div>
