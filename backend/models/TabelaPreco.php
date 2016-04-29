<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tabela_preco".
 *
 * @property integer $idtabela_preco
 * @property string $nome
 *
 * @property ProdutoTabelaPreco[] $produtoTabelaPrecos
 * @property ServicoTabelaPreco[] $servicoTabelaPrecos
 */
class TabelaPreco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tabela_preco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtabela_preco' => 'Idtabela Preco',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoTabelaPrecos()
    {
        return $this->hasMany(ProdutoTabelaPreco::className(), ['tabela_preco_id' => 'idtabela_preco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicoTabelaPrecos()
    {
        return $this->hasMany(ServicoTabelaPreco::className(), ['tabela_preco_id' => 'idtabela_preco']);
    }
}
