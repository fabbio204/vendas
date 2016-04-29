<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $idusuario
 * @property string $nome
 * @property string $username
 * @property string $senha
 * @property string $auth_key
 * @property integer $status
 * @property string $data_cadastro
 * @property string $email
 *
 * @property AuthAssignment[] $authAssignments
 * @property AuthItem[] $itemNames
 * @property Vendedor $vendedor
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'username', 'senha', 'auth_key', 'status', 'data_cadastro', 'email'], 'required'],
            [['status'], 'integer'],
            [['data_cadastro'], 'safe'],
            [['nome'], 'string', 'max' => 100],
            [['username'], 'string', 'max' => 20],
            [['senha', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Idusuario',
            'nome' => 'Nome',
            'username' => 'Username',
            'senha' => 'Senha',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'data_cadastro' => 'Data Cadastro',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthAssignments()
    {
        return $this->hasMany(AuthAssignment::className(), ['user_id' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemNames()
    {
        return $this->hasMany(AuthItem::className(), ['name' => 'item_name'])->viaTable('auth_assignment', ['user_id' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedor()
    {
        return $this->hasOne(Vendedor::className(), ['idusuario' => 'idusuario']);
    }
}
