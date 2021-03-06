<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Vendedor;

/**
 * VendedorBusca represents the model behind the search form about `backend\models\Vendedor`.
 */
class VendedorBusca extends Vendedor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idvendedor', 'idusuario'], 'integer'],
            [['nome', 'telefone1', 'telefone2', 'telefone3', 'email', 'logadouro', 'numero', 'complemento', 'cep', 'cidade', 'bairro', 'estado', 'cpf', 'rg', 'data_nascimento', 'sexo', 'comentario'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Vendedor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idvendedor' => $this->idvendedor,
            'data_nascimento' => $this->data_nascimento,
            'idusuario' => $this->idusuario,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'telefone1', $this->telefone1])
            ->andFilterWhere(['like', 'telefone2', $this->telefone2])
            ->andFilterWhere(['like', 'telefone3', $this->telefone3])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'logadouro', $this->logadouro])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'complemento', $this->complemento])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'comentario', $this->comentario]);

        return $dataProvider;
    }
}
