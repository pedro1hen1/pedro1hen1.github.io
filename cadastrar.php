 <?php
session_start();
include("conexao_1.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome1']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario1']));
$senha = mysqli_real_escape_string($conexao, trim(($_POST['senha1'])));

$sql = "select count(*) as total from username where username = '{$usuario}'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO contas (nome, username, password) VALUES ('$nome', '$usuario', '$senha');";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>