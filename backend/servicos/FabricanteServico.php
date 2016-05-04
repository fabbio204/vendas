<?php

namespace backend\servicos;

use backend\models\Fabricante;

class FabricanteServico {

    public function obterPorId($id) {
        $fabricante = Fabricante::findOne($id);
        if ($fabricante != null) {
            return $fabricante;
        }
        throw new NotFoundHttpException('Fabricante não encontrado.');
    }

    public function listar() {
        
    }

    public function cadastrar(Fabricante $fabricante) {
        return $fabricante->save();
    }

    public function atualizar(Fabricante $fabricante) {
        return $fabricante->save();
    }

    public function excluir($id) {
        $fabricante = $this->obterPorId($id);
        if ($fabricante !== null) {
            $fabricante->delete();
            return true;
        }
        return false;
    }

}
