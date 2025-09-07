<?php
session_start();

$Usuario = $_POST["Usuario"];
$Clave   = $_POST["Clave"];

// Usuarios válidos
$usuarios_validos = [
    "cris" => "12300",
    "sara" => "12345"
];

if (isset($usuarios_validos[$Usuario]) && $usuarios_validos[$Usuario] === $Clave) {
    $_SESSION["Usuario"] = $Usuario;
    header("Location: index.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}
?>
