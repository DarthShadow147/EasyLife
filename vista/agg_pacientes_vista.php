<!DOCTYPE html>
<html lang="en">
	
<?php include 'plantillas/header.php'; ?>

<body>
<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
        <a title="CenterMedicine">Easy<a class="bordes" href="index.php" title="CenterMedicine">Life</a><span class="v1">V1</span></a>
      </div>
      <div class="right_menu">
        <ul>
          <li><i class="fas fa-user"></i>
            <div class="profile_dd">              
               <div class="dd_item" >
               <a href="cerrar.php" title="Cerrar Sesion" class="dd_item" ><span class="icon" ><i class="far fa-times-circle"></i></span>Cerrar sesión</a> 
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="img">
                <img src="img/pic.png" alt="profile_pic">
              </div>
              <div class="profile_info">
                 <p>Bienvenido</p>
                 <p class="profile_name"><?php echo $_SESSION['usuario'];?></p>
              </div>
            </div>
            <ul>
              <li>
                <a href="CenterMedicine.php" >
                  <span class="icon"><i class="fab fa-battle-net"></i></span>
                  <span class="title">Easy Life</span>
                </a>
              </li>
              <li>
                <a href="citas.php" title="Citas">
                  <span class="icon"><i class="far fa-calendar-alt"></i></span>
                  <span class="title">Citas</span>
                </a>
              </li>
              <li>
                <a href="medicos.php" title="Medicos">
                  <span class="icon"><i class="fas fa-user-md"></i></span>
                  <span class="title">Medicos</span>
                </a>
              </li>
              <li>
                <a href="pacientes.php" title="Pacientes" class="active">
                  <span class="icon"><i class="fas fa-user-injured"></i></span>
                  <span class="title">Pacientes</span>
                </a>
              </li>
              <li>
                <a href="consultorios.php" title="Consultorios">
                  <span class="icon"><i class="far fa-hospital"></i></span>
                  <span class="title">Consultorios</span>
                </a>
              </li>
              <li>
                <a href="especialidades.php">
                  <span class="icon"><i class="fas fa-lungs-virus"></i></span>
                  <span class="title">Especialidades</span>
                </a>
              </li>
              <li>
                <a href="usuarios.php" title="Usuarios">
                  <span class="icon"><i class="far fa-address-book"></i></span>
                  <span class="title">Usuarios</span>
                </a>
              </li>
              <li>
                <a href="#" title="Reportes">
                  <span class="icon"><i class="fas fa-book-reader"></i></span>
                  <span class="title">Reportes</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <div class="container">
	  			<article>
					<div class="mensaje">
						<h2>AGREGAR PACIENTES</h2>
					</div>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
						<h2></h2>
						<input required type="numeric" name="identificacion" placeholder="identificación:">
						<input required type="text" name="nombres" placeholder="Nombres:">
						<input required type="text" name="apellidos" placeholder="Apellidos:">
						<input type="date" name="fechaNacimiento" placeholder="Fecha Nacimiento:">
						<select name="sexo">
                            <option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option> 
                        </select>
						<input class="agregar" type="submit" name="enviar" value="Agregar Medico">
						
					</form>
						<?php  if(!empty($errores)): ?>
							<ul>
							  <?php echo $errores; ?>
							</ul>
						<?php  endif; ?>
				</article>
      </div> 
  </div> 
</div>	
</body>
</html>