<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $idagenda
 * @property string $falou_com
 * @property string $descricao
 * @property string $data_lembrete
 * @property integer $vendedor_id
 * @property integer $cliente_id
 *
 * @property Vendedor $vendedor
 * @property Cliente $cliente
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['falou_com', 'descricao', 'vendedor_id', 'cliente_id'], 'required'],
            [['descricao'], 'string'],
            [['data_lembrete'], 'safe'],
            [['vendedor_id', 'cliente_id'], 'integer'],
            [['falou_com'], 'string', 'max' => 256],
            [['vendedor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendedor::className(), 'targetAttribute' => ['vendedor_id' => 'idvendedor']],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_id' => 'idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idagenda' => 'Idagenda',
            'falou_com' => 'Falou Com',
            'descricao' => 'Descricao',
            'data_lembrete' => 'Data Lembrete',
            'vendedor_id' => 'Vendedor ID',
            'cliente_id' => 'Cliente ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedor()
    {
        return $this->hasOne(Vendedor::className(), ['idvendedor' => 'vendedor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['idcliente' => 'cliente_id']);
    }
}
