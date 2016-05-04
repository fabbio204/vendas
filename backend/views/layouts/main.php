<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\assets\VendasAsset;

VendasAsset::register($this);
$this->beginPage()
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>Sistema Gerenciador de Vendas |<?= Html::encode($this->title) ?></title>  
        <?php $this->head() ?>
    </head>
    <body class="nav-md">
        <?php $this->beginBody() ?>
        <div id="meu-modal" class="modal fade" tabindex="-1"></div>
        <div class="container body">
            <div class="main_container">
                <?php require(__DIR__ . '/menu.php'); ?>
                <?php require(__DIR__ . '/cabecalho.php'); ?>
                <div class="right_col" role="main">
                    <?= $content ?>
                    <br/>
                </div>
                <?php require(__DIR__ . '/rodape.php'); ?>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
