<?php
require ("pessoa.php");
class Fruta{
    //atributos
    public $nome;
    public $cor;

    //Métodos
    function __construct($nome,$cor){
        $this->nome=$nome;
        $this->cor=$cor;

    }
    function set_name($nome){
        $this->nome = $nome;

    }
    function set_cor($cor){
        $this->cor=$cor;
    }
    function get_name(){
        return $this->nome;

    }
    function get_cor(){
        return $this->cor;

    }
}
$maca = new Fruta("maca_ifsp_turmaB","vermelha");
$banana = new Fruta("banana_ifsp_turmaB","amarela");

/*$maca->set_name("maca_ifsp_turmaB");
$banana->set_name("banana_ifsp_turmaB");*/

echo $maca->get_name();
echo"<br>". $banana->get_name();

$aluno1 =new Pessoa("Thiago",17, "aluno");

echo $aluno1->apresentar();
?>  