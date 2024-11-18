<?php
require_once '../modelo/connectionComiBack.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $db = new DatabaseComidBack();

    $conn = $db->getConnection();

    $sql = "SELECT * FROM usuarios WHERE Mail = :user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user', $user);
    $stmt->execute();
    
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $Correo = $resultado['Mail'];   
    
    $password = $resultado['Contrasena'];

    $rol = $resultado['IDRol'];

    $activo = $resultado['Activo'];
}

if ($Correo == $user) {
    if ($password == $pass) {
        if ($rol == 3) {
            if ($activo == 1) {
                // Mensaje antes de la redirección
                echo '<script>alert("Inicio de sesión exitoso. Serás redirigido a la página principal.");</script>';
                // Redireccionar después de mostrar el mensaje
                echo '<script>window.location.href = "../comiBack.php";</script>';
                exit();
            } else {
                // Mensaje antes de la redirección
                echo '<script>alert("Tu cuenta no está activa.");</script>';
                // Redireccionar después de mostrar el mensaje
                echo '<script>window.location.href = "../index.php";</script>';
                exit();
            }
        } else {
            // Mensaje antes de la redirección
            echo '<script>alert("Rol no válido.");</script>';
            // Redireccionar después de mostrar el mensaje
            echo '<script>window.location.href = "../index.php";</script>';
            exit();
        }
    } else {
        // Mensaje antes de la redirección
        echo '<script>alert("Contraseña incorrecta.");</script>';
        // Redireccionar después de mostrar el mensaje
        echo '<script>window.location.href = "../index.php";</script>';
        exit();
    }
} else {
    // Mensaje antes de la redirección
    echo '<script>alert("Correo no válido.");</script>';
    // Redireccionar después de mostrar el mensaje
    echo '<script>window.location.href = "../index.php";</script>';
    exit();
}



// if ($Correo = $user ) {
//     if ($password = $pass) {
//         if ($rol = 3) {
//             if ($activo = 1) {
//                 header('Location: ../views/index.php');
//                 exit();
//             }else {
//                 header('Location: ../index.php');
//                 exit();
//             }
//         }else {
//             header('Location: ../index.php');
//             exit();
//         }
//     }else {
//         header('Location: ../index.php');
//         exit();
//     }
// }else {
//     header('Location: ../index.php');
//     exit();
// }


//     if ($Correo === $user && $password === $pass) {
//         header('Location: ../views/index.php');
//         exit();
//     } else {
//         header('Location: ../index.php');
//         exit();
//     }

// }