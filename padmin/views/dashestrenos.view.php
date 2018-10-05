<?php require 'header.php' ?>
<body class="">
  <div class="wrapper ">
      <div class="sidebar" data-color="danger" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="../index.php" class="simple-text logo-normal">
          CinemaByte
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Panel de Control</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./dashcafeteria.php">
              <i class="material-icons">local_cafe</i>
              <p>Cafetería</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./dashcartelera.php">
              <i class="material-icons">movie</i>
              <p>Cartelera</p>
            </a>
          </li>
          <?php if($usuario['tipo'] > 4)
          { ?>
          <li class="nav-item ">
            <a class="nav-link" href="./dashcontacto.php">
              <i class="material-icons">location_ons</i>
              <p>Datos de Contacto</p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item active">
            <a class="nav-link" href="./dashestrenos.php">
              <i class="material-icons">local_movies</i>
              <p>Estrenos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./dashpagprincipal.php">
              <i class="material-icons">home</i>
              <p>Página Principal</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./dashpromociones.php">
              <i class="material-icons">local_play</i>
              <p>Promociones</p>
            </a>
          </li>
          <?php if($usuario['tipo'] > 4)
          { ?>
          <li class="nav-item ">
            <a class="nav-link" href="./dashusuarios.php">
              <i class="material-icons">person</i>
              <p>Usuarios</p>
            </a>
          </li>
          <?php } ?>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Estrenos</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                
    
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Crear Usuario <i class="material-icons">person_add</i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
                        <button class="btn btn-danger btn-block" onclick="demo.showNotification('top','left')">Nueva Pelicula en Estreno</button>
                      </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title ">Estrenos</h4>
                  <p class="card-category"> Elige la pelicula que deseas modificar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-danger">
                        <th>
                          ID
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Ruta
                        </th>
                        <th>
                          Nombre de Imagen
                        </th>
                        <th>
                          Fecha
                        </th>
                        <th>
                          Genero
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php foreach($estrenos as $estreno): ?>
                        <tr>
                          <td>
                            <?php echo $estreno['id']; ?>
                          </td>
                          <td>
                            <?php echo $estreno['titulo']; ?>
                          </td>
                          <td>
                            <?php echo $estreno['ruta']; ?>
                          </td>
                          <td>
                            <?php echo $estreno['nombrearchivo']; ?>
                          </td>
                          <td>
                            <?php echo $estreno['fecha']; ?>
                          </td>
                          <td>
                            <?php echo $estreno['genero']; ?>
                          </td>
                          <td class="text-anger">
                            <a style='text-decoration:none;color:red;' href="editarestreno.php?id=<?php echo $estreno['id']; ?>">Editar</a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          
      </div>
<?php require 'footer.php'?>