<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property integer $idservico
 * @property string $nome
 * @property string $descricao
 *
 * @property PiscinaServico[] $piscinaServicos
 * @property ServicoAgregado[] $servicoAgregados
 * @property ServicoAgregado[] $servicoAgregados0
 * @property ServicoTabelaPreco[] $servicoTabelaPrecos
 * @property VendaServico[] $vendaServicos
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idservico' => 'Idservico',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPiscinaServicos()
    {
        return $this->hasMany(PiscinaServico::className(), ['servico_id' => 'idservico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicoAgregados()
    {
        return $this->hasMany(ServicoAgregado::className(), ['servico_pai' => 'idservico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicoAgregados0()
    {
        return $this->hasMany(ServicoAgregado::className(), ['servico_filho' => 'idservico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicoTabelaPrecos()
    {
        return $this->hasMany(ServicoTabelaPreco::className(), ['servico_id' => 'idservico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendaServicos()
    {
        return $this->hasMany(VendaServico::className(), ['servico_id' => 'idservico']);
    }
}
