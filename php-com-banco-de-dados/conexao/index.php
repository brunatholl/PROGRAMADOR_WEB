<?php
require_once("ControllerApiBase.php");
class Principal extends ControllerApiBase {

    public function __construct(){
        $this->listaDados();
    }

    public function listaDados() {
        $sql = " select * from sistema";
        $aDados = $this->getQuery()->selectAll($sql);
        $xDados = array();
        foreach ($aDados as $sDados){
            array_push($xDados, $sDados);
        }

        $total = $this->getQuery()->select("select count(*) as total from sistema");
        $total = intval($total["total"]);
        
        $aDados = array(
            "success" => true,
            "total" => $total,
            "sistema" => $xDados
        );
        
        echo "<pre>" . print_r($aDados, true) ."</pre>";
    }

    public function atualizaSistema() {
        $sSql = "UPDATE sistema set sisnome = 'TESTE' where SISCODIGO = 1";

        // Executa a query de UPDATE
        $this->getQuery()->query($sSql);
    }
}

new Principal();