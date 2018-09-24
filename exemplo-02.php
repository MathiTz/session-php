<?php

require_once('config.php');

session_unset($_SESSION['nome']); //limpa variáveis de sessão

echo $_SESSION['nome'];

session_destroy(); //limpa a variável e remove o usuário