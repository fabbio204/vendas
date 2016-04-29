<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property integer $idproduto
 * @property string $nome
 * @property string $link
 * @property string $descricao
 * @property integer $fabricante_id
 * @property integer $subclasse_id
 * @property integer $unidade_venda_id
 *
 * @property FotoProduto[] $fotoProdutos
 * @property PiscinaProdutos[] $piscinaProdutos
 * @property Fabricante $fabricante
 * @property Subclasse $subclasse
 * @property UnidadeVenda $unidadeVenda
 * @property ProdutoAgregado[] $produtoAgregados
 * @property ProdutoAgregado[] $produtoAgregados0
 * @property ProdutoTabelaPreco[] $produtoTabelaPrecos
 * @property VendaProduto[] $vendaProdutos
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'link', 'descricao', 'fabricante_id', 'subclasse_id', 'unidade_venda_id'], 'required'],
            [['descricao'], 'string'],
            [['fabricante_id', 'subclasse_id', 'unidade_venda_id'], 'integer'],
            [['nome', 'link'], 'string', 'max' => 256],
            [['fabricante_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fabricante::className(), 'targetAttribute' => ['fabricante_id' => 'idfabricante']],
            [['subclasse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subclasse::className(), 'targetAttribute' => ['subclasse_id' => 'idsubclasse']],
            [['unidade_venda_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadeVenda::className(), 'targetAttribute' => ['unidade_venda_id' => 'idunidade_venda']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idproduto' => 'Idproduto',
            'nome' => 'Nome',
            'link' => 'Link',
            'descricao' => 'Descricao',
            'fabricante_id' => 'Fabricante ID',
            'subclasse_id' => 'Subclasse ID',
            'unidade_venda_id' => 'Unidade Venda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotoProdutos()
    {
        return $this->hasMany(FotoProduto::className(), ['produto_id' => 'idproduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPiscinaProdutos()
    {
        return $this->hasMany(PiscinaProdutos::className(), ['produto_id' => 'idproduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFabricante()
    {
        return $this->hasOne(Fabricante::className(), ['idfabricante' => 'fabricante_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubclasse()
    {
        return $this->hasOne(Subclasse::className(), ['idsubclasse' => 'subclasse_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadeVenda()
    {
        return $this->hasOne(UnidadeVenda::className(), ['idunidade_venda' => 'unidade_venda_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoAgregados()
    {
        return $this->hasMany(ProdutoAgregado::className(), ['produto_pai' => 'idproduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoAgregados0()
    {
        return $this->hasMany(ProdutoAgregado::className(), ['produto_filho' => 'idproduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoTabelaPrecos()
    {
        return $this->hasMany(ProdutoTabelaPreco::className(), ['produto_id' => 'idproduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendaProdutos()
    {
        return $this->hasMany(VendaProduto::className(), ['produto_id' => 'idproduto']);
    }
}
