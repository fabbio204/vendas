<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "unidade_venda".
 *
 * @property integer $idunidade_venda
 * @property string $nome
 *
 * @property Produto[] $produtos
 */
class UnidadeVenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidade_venda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idunidade_venda' => 'Idunidade Venda',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['unidade_venda_id' => 'idunidade_venda']);
    }
}
