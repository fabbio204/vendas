<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\assets\AppAsset;

AppAsset::register($this);

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

        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">     
        <!-- Tema customizado -->
        <link href="css/custom.css" rel="stylesheet">
        <?php $this->head() ?>
    </head>

    <body class="nav-md">
        <?php $this->beginBody() ?>
        <div class="container body">
            <div class="main_container">
                <?php require(__DIR__ . '/menu.php'); ?>
                <?php require(__DIR__ . '/cabecalho.php'); ?>
                <div class="right_col" role="main">
                    <?= $content ?>
                </div>
                <?php require(__DIR__ . '/rodape.php'); ?>
            </div>
        </div>

        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <?php $this->endBody() ?>
    </body>
</html>

<?php $this->endPage() ?>
