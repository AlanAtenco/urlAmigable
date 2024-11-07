<?php
require_once "./app/config/dependencias.php";
session_start();

if (isset($_SESSION['usuario'])) {
    header("location:login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <title>Registro</title>
</head>
<body class="d-flex justify-content-center align-items-center mt-5 p-3">
</body>
</html>
