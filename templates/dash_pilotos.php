<?php
    $usuario = $_SESSION["id"];
    $sql = $conexion->query("SELECT id, nombre, psicofisico, saldo_pesos, saldo_usd FROM personas WHERE ref_usuario='$usuario'");

    $row = $sql->fetch_assoc();

    $id = $row["id"];
    $nombre = $row["nombre"];
    $psicofisico = $row["psicofisico"];
    $saldo_pesos = $row["saldo_pesos"];
    $saldo_usd = $row["saldo_usd"];
?>

<br>
<div class="margin-20">
    <div class="card">
        <div class="card-header">
            <h3><?php echo $nombre; ?></h3>
        </div>
            <div class="card-body">
            <h5 class="card-title">Vencimiento psicofísico: <?php echo $psicofisico; ?></h5>
            <p class="card-text">Tu saldo es $: <?php echo $saldo_pesos; ?> - USD: <?php echo $saldo_usd; ?></p>
            <a href="#" class="btn btn-primary">Solicitar autorización de vuelo</a>
        </div>
    </div>
    <br>
</div>

<br>
<div class="margin-20">
    <div class="card">
        <div class="card-header">
            <h3>Aeronaves en servicio</h3>
        </div>
            <div class="card-body">
<?php
    $usuario = $_SESSION["id"];
    $sql = $conexion->query("SELECT id, matricula, marca, modelo FROM aviones WHERE estado = 'En servicio' ");

    if ($sql->num_rows == 0) {
        echo '<h5 class="card-title">Sin aeronaves disponibles</h5>';
    } else {
        while ($row = $sql->fetch_assoc()) {
            echo '<h5 class="card-title"> Aeronave disponible: ' . $row['matricula'] . ' ' . $row['marca'] . ' ' . $row['modelo'] . '</h5>';
        }
    }
?>
            <a href="#" class="btn btn-primary">Informar novedades</a>
        </div>
    </div>
    <br>
</div>



