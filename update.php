<?php
require_once './vendor/autoload.php';

use ExemploPDOMySQL\MySQLConnection;

$bd = new MySQLConnection();

$genero = null;

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $comando = $bd->prepare('SELECT * FROM generos WHERE id = :id');
    $comando->execute([':id' => $_GET['id']]);

    $genero = $comando->fetch(PDO::FETCH_ASSOC);
} else {
    $comando = $bd->prepare('UPDATE generos SET nome = :nome WHERE id = :id');
    $comando->execute([':nome' => $_POST['nome'],':id' => $_POST['id']]);
    
    header('Location:/index.php');
};
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Genero</title>
</head>
<body>
    <h1>Editar Genero</h1>
    <form action="insert.php" method="post">
        <label for="nome">Nome do Genero</label>
        <input type="text" required name="nome" />
        <button type="submit">Salvar</button>
    </form>  
</body>
</html>