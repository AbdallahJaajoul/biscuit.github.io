<?php
$nome = htmlspecialchars($_POST['nome']);
$comentario = htmlspecialchars($_POST['comentario']);
$avaliacao = intval($_POST['avaliacao']);

$linha = "$nome|$comentario|$avaliacao\n";
file_put_contents("avaliacoes.txt", $linha, FILE_APPEND);

header("Location: avaliacoes.html");
exit;
?>
