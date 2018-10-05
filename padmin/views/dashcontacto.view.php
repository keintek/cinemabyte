<?php require 'header.php' ?>
<body class="">
  <div class="wrapper ">
      <div class="sidebar" data-color="green" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
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
          <li class="nav-item active">
            <a class="nav-link" href="./dashcontacto.php">
              <i class="material-icons">location_ons</i>
              <p>Datos de Contacto</p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item ">
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
            <a class="navbar-brand" href="#">Contacto</a>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-success">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Administrar:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#direcciones" data-toggle="tab">
                            <i class="material-icons">place</i> Direcciones
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#mails" data-toggle="tab">
                            <i class="material-icons">email</i> E-Mails
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#redes" data-toggle="tab">
                            <i class="material-icons">group</i> Redes Sociales
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#telefonos" data-toggle="tab">
                            <i class="material-icons">local_phone</i> Teléfonos
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="direcciones">
                      <table class="table">
                        <tbody>
                          <button class="btn btn-success btn-block" onclick="demo.showNotification('top','left')">Añadir Dirección</button>
                          <?php foreach($direcciones as $direccion): ?>
                          <tr>                            
                            <td>
                              <div class="">
                                <label class="form-check-label">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>                            
                            <td><?php echo "Dirección: ".$direccion['direccion']." || Ciudad: ".$direccion['ciudad']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm" onclick="location.href='editardireccion.php?id=<?php echo $direccion['id']; ?>';" value="Go to Google">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="mails">
                      <table class="table">
                        <tbody>
                          <button class="btn btn-success btn-block" onclick="demo.showNotification('top','left')">Añadir Mail</button>
                          <?php foreach($mails as $mail): ?>
                          <tr>
                            <td>
                              <div class="">
                                <label class="form-check-label">
                                  
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td><?php echo "E-Mail: ".$mail['email']; ?>
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm" onclick="location.href='editarmail.php?id=<?php echo $direccion['id']; ?>';" value="Go to Google">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="redes">
                      <table class="table">
                        <tbody>
                          <button class="btn btn-success btn-block" onclick="demo.showNotification('top','left')">Añadir Red Social</button>
                          <?php foreach($redes as $red): ?>
                          <tr>                            
                            <td>
                              <div class="">
                                <label class="form-check-label">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>                            
                            <td><?php echo "Nombre: ".$red['red_nombre']." || URL: ".$red['red_direccion']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm" onclick="location.href='editarred.php?id=<?php echo $red['id']; ?>';" value="Go to Google">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="telefonos">
                      <table class="table">
                        <tbody>
                          <button class="btn btn-success btn-block" onclick="demo.showNotification('top','left')">Añadir Teléfono</button>
                          <?php foreach($telefonos as $telefono): ?>
                          <tr>
                            <td>
                              <div class="">
                                <label class="form-check-label">
                                  
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td><?php echo "Teléfono: ".$telefono['numero']; ?>
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm" onclick="location.href='editartel.php?id=<?php echo $telefono['id']; ?>';" value="Go to Google">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
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
<?php require 'footer.php'?>