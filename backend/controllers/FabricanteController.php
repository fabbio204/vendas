<?php

namespace backend\controllers;

use Yii;
use backend\models\Fabricante;
use backend\models\FabricanteBusca;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\servicos\FabricanteServico;

/**
 * FabricanteController implements the CRUD actions for Fabricante model.
 */
class FabricanteController extends Controller
{
    private $servico;
    
    // Construtor
    public function __construct($id, $module, $config = []) {
        parent::__construct($id, $module, $config);
        $this->servico = new FabricanteServico();
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lista todos os Fabricantes.
     */
    public function actionIndex()
    {
        $searchModel = new FabricanteBusca();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fabricante model.
     * @param integer $id
     * @return mixed
     */
    public function actionDetalhes($id)
    {
        return $this->renderAjax('detalhes', [
            'model' => $this->servico->obterPorId($id),
        ]);
    }

    /**
     * Creates a new Fabricante model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fabricante();

        if ($model->load(Yii::$app->request->post())) {
            $this->servico->cadastrar($model);            
            return $this->redirect('index');
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Fabricante model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionEditar($id)
    {
        $model = $this->servico->obterPorId($id);

        if ($model->load(Yii::$app->request->post())) {
            $this->servico->atualizar($model);
            return $this->redirect(['fabricante/index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Fabricante model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionExcluir($id)
    {
        if(Yii::$app->request->isPost){
            $this->servico->excluir($id);
            return $this->redirect(['index']);
        }
        
        $fabricante = $this->servico->obterPorId($id);
        return $this->renderAjax('excluir',['model'=>$fabricante]);
    }
}
