<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Produto;

/**
 * ProdutoBusca represents the model behind the search form about `backend\models\Produto`.
 */
class ProdutoBusca extends Produto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idproduto', 'fabricante_id', 'subclasse_id', 'unidade_venda_id'], 'integer'],
            [['nome', 'link', 'descricao'], 'safe'],
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
        $query = Produto::find();

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
            'idproduto' => $this->idproduto,
            'fabricante_id' => $this->fabricante_id,
            'subclasse_id' => $this->subclasse_id,
            'unidade_venda_id' => $this->unidade_venda_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
