<?php

include_once 'class/Produto.class.php';

$produto1 = new Produto;
$produto2 = new Produto;

$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - The Best of Eric Clapton';

$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - The Best of Eric Clapton';

$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();

?>

