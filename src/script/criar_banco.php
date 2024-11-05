<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'planilhas';

$conn = new mysqli($host, $username, $password); 

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SHOW DATABASES LIKE '$dbname'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    $sql = "CREATE DATABASE `$dbname` CHARACTER SET utf8 COLLATE utf8_bin";
    
    if ($conn->query($sql) === TRUE) {
        echo "Banco de dados '$dbname' criado com sucesso.\n";
    } else {
        die("Erro ao criar o banco de dados: " . $conn->error);
    }
}

$conn->select_db($dbname);

$sql_tables = [
    "CREATE TABLE IF NOT EXISTS `email` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `email` varchar(255) COLLATE utf8_bin NOT NULL,
        `hierarquia` varchar(50) COLLATE utf8_bin DEFAULT NULL,
        `secretaria` varchar(20) COLLATE utf8_bin DEFAULT NULL,
        `info_adicional` varchar(150) COLLATE utf8_bin DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;",

    "CREATE TABLE IF NOT EXISTS `user` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) COLLATE utf8_bin NOT NULL,
        `matricula` int(11) NOT NULL,
        `secretaria` varchar(15) COLLATE utf8_bin DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;",

    "CREATE TABLE IF NOT EXISTS `user_email` (
        `id_user` int(11) DEFAULT NULL,
        `id_email` int(11) DEFAULT NULL,
        KEY `id_email` (`id_email`),
        KEY `id_user` (`id_user`),
        CONSTRAINT `user_email_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
        CONSTRAINT `user_email_ibfk_2` FOREIGN KEY (`id_email`) REFERENCES `email` (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;"
];

foreach ($sql_tables as $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Tabela criada ou já existe com sucesso.\n";
    } else {
        echo "Erro ao criar tabela: " . $conn->error . "\n";
    }
}

$conn->close();
?>
