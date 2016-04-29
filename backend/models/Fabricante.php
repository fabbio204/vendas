<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fabricante".
 *
 * @property integer $idfabricante
 * @property string $nome
 * @property string $link
 *
 * @property Produto[] $produtos
 */
class Fabricante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fabricante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'link'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfabricante' => 'Idfabricante',
            'nome' => 'Nome',
            'link' => 'Link',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['fabricante_id' => 'idfabricante']);
    }
}
