<?php 

require_once("config.php");

// session_unset() apaga todas as variáveis de sessão

// unset($_SESSION["nome"]);

echo $_SESSION["nome"];

// session_destroy() // remove as variáveis de sessão e expulsa o usuário

?>