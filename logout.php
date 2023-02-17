<?php
//en el codigo desconectamos y destruimos la sesion

session_start();

session_unset();

session_destroy();

header('Location: /login');
?>