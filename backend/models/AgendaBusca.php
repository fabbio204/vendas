<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Agenda;

/**
 * AgendaBusca represents the model behind the search form about `backend\models\Agenda`.
 */
class AgendaBusca extends Agenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idagenda', 'vendedor_id', 'cliente_id'], 'integer'],
            [['falou_com', 'descricao', 'data_lembrete'], 'safe'],
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
        $query = Agenda::find();

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
            'idagenda' => $this->idagenda,
            'data_lembrete' => $this->data_lembrete,
            'vendedor_id' => $this->vendedor_id,
            'cliente_id' => $this->cliente_id,
        ]);

        $query->andFilterWhere(['like', 'falou_com', $this->falou_com])
            ->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
