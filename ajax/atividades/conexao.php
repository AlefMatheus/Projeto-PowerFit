<?php
define('host', 'localhost');
define('usuario', 'root');
define('senha', '');
define('db', 'powerfitbd');

$conexao = mysqli_connect(host, usuario, senha, db) or die ('nao foi possivel conectar');

?> 