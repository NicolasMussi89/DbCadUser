<?php 

include('conexao.php')

/*variaveis para armazenamento do form */
$nome = $_POST['nome'];
$nome = $_POST['gmail'];
$nome = $_POST['senha'];

/*confirma dados informados pelo ussuario */
echo "<h3>Nome: $nome</h3>";
echo "<h3>Nome: $gmail</h3>";
echo "<h3>senha: A senha é secreta</h3>": 

$cad_usuario = "INSERT INTO usuario(nome,email,senha) VALUES"
"('$nome', $'email', 'senha')"

//teste de condição para rodar SQL
if(mysqli_query($conn, $cad_usuario)){
    echo "<h1>Novo cadastro realidade</h1>";
}else{
    each "ERRO: " . $cad_usuario . "</br>" . mysqli_error($conn)
}
//mysqli_close($conn);

?>