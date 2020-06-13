<?php
define('HOST', '35.192.93.89:3306');
define('USUARIO', 'root');
define('SENHA', '982669923');
define('DB', 'contas');

$conexao =  mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');