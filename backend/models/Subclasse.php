<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "subclasse".
 *
 * @property integer $idsubclasse
 * @property string $nome
 * @property integer $classe_id
 *
 * @property Produto[] $produtos
 * @property Classe $classe
 */
class Subclasse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subclasse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['classe_id'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['classe_id'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['classe_id' => 'idclasse']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idsubclasse' => 'Idsubclasse',
            'nome' => 'Nome',
            'classe_id' => 'Classe ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['subclasse_id' => 'idsubclasse']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasse()
    {
        return $this->hasOne(Classe::className(), ['idclasse' => 'classe_id']);
    }
}
