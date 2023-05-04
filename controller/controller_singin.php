<!-- ----- INGRESO AL SITIO ----- -->
<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btn_ingresar"])) {
        if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
            $usuario = $_POST["usuario"];
            $password = $_POST["password"];
            $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
            if ($sql->num_rows > 0) {
                $datos = $sql->fetch_object();
                $passHash = $datos->password;
                
                if (password_verify($password, $passHash)) {
                    $_SESSION["id"]=$datos->id;
                    $_SESSION["usuario"]=$datos->usuario;
                    $_SESSION["nivel"]=$datos->nivel;
                    header("location: ../index.php");
                    exit();
                }
            }
            echo "<div class='alert alert-danger' role='alert'>Acceso denegado!</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Campos vacíos!</div>";
        }
    }
?>
