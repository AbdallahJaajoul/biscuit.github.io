<?php
if (file_exists("avaliacoes.txt")) {
  $linhas = file("avaliacoes.txt");
  foreach ($linhas as $linha) {
    list($nome, $comentario, $avaliacao) = explode("|", trim($linha));
    echo "<div style='margin-bottom:20px;'>";
    echo "<strong>$nome</strong><br>";
    echo "<span>" . str_repeat("⭐", $avaliacao) . "</span><br>";
    echo "<p>$comentario</p>";
    echo "</div>";
  }
} else {
  echo "<p>Sem avaliações ainda. Seja o primeiro a avaliar!</p>";
}
?>
