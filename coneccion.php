<?php

session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Verificar credenciales aquí
    if ($username === 'usuario' && $password === 'contraseña') {
        // Credenciales válidas, iniciar sesión
        $_SESSION['username'] = $username;
        header('Location: inicio.php');
        exit();
    } else {
        // Credenciales inválidas, mostrar mensaje de error
        $error = 'Credenciales inválidas. Intente de nuevo.';
    }
}

?>