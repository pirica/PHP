<?php

//pgsql:host=localhost;port=5432;dbname=postgres;user=postgres;password=teknisa

$endereco = 'localhost';
$banco = 'postgres';
$usuario = 'postgres';
$senha = 'teknisa';


try {
	$pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	// echo "Conectado!";
} catch (\PDOException $e){
	var_dump($e);
}

$stmt = $pdo->prepare("SELECT * FROM stocks");
$stmt->execute();


$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    print_r($user);
}