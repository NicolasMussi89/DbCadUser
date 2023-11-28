<?php 
/*variaveis para armazenamento do form */
$nome = $_POST['nome'];
$nome = $_POST['gmail'];
$nome = $_POST['senha'];

/*confirma dados informados pelo ussuario */
echo "<h3>Nome: $nome</h3>";
echo "<h3>Nome: $gmail</h3>";
echo "<h3>senha: A senha é secreta</h3>": 
$cad_usuario = "INSERT INTO usuario(nome,email,senha) VALUES"
"('$nome', $'email', 'senha')";
?>