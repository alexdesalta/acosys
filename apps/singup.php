<!-- ----- ALTA DE USUARIO ----- -->

<?php 
    $title = 'Aero Club Oran';
    include("../templates/top.php");
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Aero Club Orán</h2>
            <div class="text-center mb-5 text-dark"><h3>Registrarse</h3></div>
            <div class="text-center mb-5 text-dark">
                <?php
                    include("../model/conexion.php");
                    include("../controller/controller_singup.php");
                ?>
            </div>

            <div class="card my-5">
                <!-- ----- Formulario de registro ----- -->
                <form class="card-body cardbody-color p-lg-5" method="POST" action="">
                    <div class="text-center">
                        <img src="../assets/images/combat_pilot.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                        width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                        placeholder="Usuario" name="usuario" required>
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp"
                        placeholder="Correo electrónico" name="email" required>
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required>
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" id="repassword" placeholder="Confirme contraseña" name="repassword" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-color px-5 mb-5 w-100" name="btn_ingresar">Registrarse</button>
                    </div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Ya tenés cuenta? <a href="singin.php" class="text-dark fw-bold"> Ingresar</a>
                    </div>
                </form>
                <!-- ----- Fin Formulario de registro ----- -->

            </div>
        </div>
    </div>
</div>
    
<?php 
    include("../templates/bottom.php");
?>