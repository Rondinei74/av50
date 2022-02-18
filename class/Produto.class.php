<?php
class Produto
{
    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;

    function IprimeEtiqueta()
    {
        print 'Codigo:'.$this->Codigo."<br>";
        print 'Descricão:'.$this->Descricao."<br>";
    }
}
?>