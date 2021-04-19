<?php

define('ROST','localhost');
define('USUARIO','root');
define('SENHA', '');
define('DB','logando');

$conexao = mysqli_connect(ROST,USUARIO,SENHA,DB) or die("Não foi possivel fazer a conexão ! ");