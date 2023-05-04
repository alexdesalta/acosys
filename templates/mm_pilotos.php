<body class="pilotos">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Usuario: <?php echo $username;?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Combustible</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Vuelo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controller/controller_logout.php">Salir</a>
            </li>

          </ul>
        </div>
      </div>
  </nav>
