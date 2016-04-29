<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "classe".
 *
 * @property integer $idclasse
 * @property string $nome
 *
 * @property Subclasse[] $subclasses
 */
class Classe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idclasse' => 'Idclasse',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubclasses()
    {
        return $this->hasMany(Subclasse::className(), ['classe_id' => 'idclasse']);
    }
}
