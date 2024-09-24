<?php
require_once("ConsultaPadrao.php");
class ConsultaSistema extends ConsultaPadrao {

    protected function getTabela(){
        return 'sistema';
    }

    protected function getColunaOrdenacao(){
        return 'siscodigo';
    }

    protected function getColunas(){
        // Colunas
        return array(
            "Código",
            "Nome",
            "Situação"
        );
    }

    protected function getColunasBancoDados(){
        // Colunas na mesma ordem dos titulos
        return array(
            "siscodigo",
            "sisnome",
            "sisativo",
        );
    }

    // Forma 01, USANDO SQL
    protected function getSqlConsulta(){
        $sqlConsulta = " select siscodigo,
                                sisnome,
                                case when sisativo = 1 then 'ATIVO' else 'INATIVO' end sisativo
                          from " . $this->getTabela() . " order by " . $this->getColunaOrdenacao();
        return $sqlConsulta;
    }

    // Forma 02
    // protected function getDadosConsulta(){
    //     $aDados = parent::getDadosConsulta();

    //     $aDadosNew = array();
    //     foreach($aDados as $key => $aDadosAtual){
    //         $sisativo = $aDadosAtual["sisativo"];

    //         if($sisativo == 1){
    //             $aDadosAtual["sisativo"] = 'ATIVO';
    //         } else {
    //             $aDadosAtual["sisativo"] = 'INATIVO';
    //         }

    //         $aDadosNew[$key] = $aDadosAtual;
    //     }

    //     return $aDadosNew;
    // }


}

new ConsultaSistema();