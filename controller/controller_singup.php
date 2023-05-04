<!-- ----- ALTA DE USUARIO ----- -->
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btn_ingresar"])) {
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        
        if ($password == $repassword) {
            $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' OR email='$email'");
            if ($sql->num_rows > 0) {
                echo "<div class='alert alert-danger' role='alert'>El Usuario o Correo ya existen!</div>";
            } else {
                $passcifrado = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO usuarios (usuario, email, password) VALUES ('$usuario', '$email', '$passcifrado')";
                if ($conexion->query($sql)) {
                    header("location: singin.php");
                    exit();
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Error en el registro: " . $conexion->error . "</div>";
                }
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>Los Passwords no coinciden!</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>No puede haber campos vacíos!</div>";
    }
?>
