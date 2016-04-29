<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vendedor".
 *
 * @property integer $idvendedor
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
 * @property string $rg
 * @property string $data_nascimento
 * @property string $sexo
 * @property string $comentario
 * @property integer $idusuario
 *
 * @property Agenda[] $agendas
 * @property Cliente[] $clientes
 * @property Venda[] $vendas
 * @property Usuario $idusuario0
 */
class Vendedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'telefone1', 'email', 'cpf', 'rg', 'idusuario'], 'required'],
            [['data_nascimento'], 'safe'],
            [['comentario'], 'string'],
            [['idusuario'], 'integer'],
            [['nome', 'email', 'logadouro', 'complemento', 'cidade', 'bairro', 'estado'], 'string', 'max' => 256],
            [['telefone1', 'telefone2', 'telefone3', 'numero'], 'string', 'max' => 24],
            [['cep'], 'string', 'max' => 10],
            [['cpf', 'rg'], 'string', 'max' => 11],
            [['sexo'], 'string', 'max' => 2],
            [['idusuario'], 'unique'],
            [['idusuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['idusuario' => 'idusuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idvendedor' => 'Idvendedor',
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
            'rg' => 'Rg',
            'data_nascimento' => 'Data Nascimento',
            'sexo' => 'Sexo',
            'comentario' => 'Comentario',
            'idusuario' => 'Idusuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendas()
    {
        return $this->hasMany(Agenda::className(), ['vendedor_id' => 'idvendedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['vendedor_id' => 'idvendedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['vendedor_id' => 'idvendedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdusuario0()
    {
        return $this->hasOne(Usuario::className(), ['idusuario' => 'idusuario']);
    }
}
