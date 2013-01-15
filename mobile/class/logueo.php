<?php

// Consulta
$consulta = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
            mysql_real_escape_string($usuario),
            mysql_real_escape_string($contraseña));
?>