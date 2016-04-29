<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $idcliente
 * @property string $nome
 * @property string $telefone1
 * @property string $telefone2
 * @property string $telefone3
 * @property string $email
 * @property string $logadouro
 * @property string $numero
 * @property string $complemento
 * @property string $cep
 * @property string $cidade
 * @property string $bairro
 * @property string $estado
 * @property string $cpf
 * @property string $cnpj
 * @property string $rg
 * @property string $data_nascimento
 * @property string $sexo
 * @property string $comentario
 * @property integer $vendedor_id
 *
 * @property Agenda[] $agendas
 * @property Vendedor $vendedor
 * @property Venda[] $vendas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'telefone1', 'email'], 'required'],
            [['data_nascimento'], 'safe'],
            [['comentario'], 'string'],
            [['vendedor_id'], 'integer'],
            [['nome', 'email', 'logadouro', 'complemento', 'cidade', 'bairro', 'estado'], 'string', 'max' => 256],
            [['telefone1', 'telefone2', 'telefone3', 'numero'], 'string', 'max' => 24],
            [['cep'], 'string', 'max' => 10],
            [['cpf', 'rg'], 'string', 'max' => 11],
            [['cnpj'], 'string', 'max' => 15],
            [['sexo'], 'string', 'max' => 2],
            [['vendedor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendedor::className(), 'targetAttribute' => ['vendedor_id' => 'idvendedor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcliente' => 'Idcliente',
            'nome' => 'Nome',
            'telefone1' => 'Telefone1',
            'telefone2' => 'Telefone2',
            'telefone3' => 'Telefone3',
            'email' => 'Email',
            'logadouro' => 'Logadouro',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'cep' => 'Cep',
            'cidade' => 'Cidade',
            'bairro' => 'Bairro',
            'estado' => 'Estado',
            'cpf' => 'Cpf',
            'cnpj' => 'Cnpj',
            'rg' => 'Rg',
            'data_nascimento' => 'Data Nascimento',
            'sexo' => 'Sexo',
            'comentario' => 'Comentario',
            'vendedor_id' => 'Vendedor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendas()
    {
        return $this->hasMany(Agenda::className(), ['cliente_id' => 'idcliente']);
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
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['cliente_id' => 'idcliente']);
    }
}
