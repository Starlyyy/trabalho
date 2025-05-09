<?php 

require_once('modelo/Card.php');

$nome = $_POST['nome'];
$nomeDiretor = $_POST['nomeDiretor'];
$ano = $_POST['ano'];
$link = $_POST['link'];

$card = new Card($nome, $nomeDiretor, $ano, $link);

$card->gerarCard();