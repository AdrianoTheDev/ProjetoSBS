<?php
header("Content-Type: text/html; charset=utf8");
echo '<h1>Dados recebidos do formulário:</h1>';

echo "Quantidade: ";
echo $_POST['qtd'];
echo "<br><br>";

echo "Descrição: ";
echo $_POST['descricao'];
echo "<br><br>";

echo "Preço: R$ ";
echo $_POST['preco'];
