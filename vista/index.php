<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SideBar Menu</title>
    <link rel="stylesheet" href="css/estilos-menu.css">
    <link href="https://fonts.googleapis.com/css?family=Antic" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="img/iconotb.png">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>
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
                <a href="CenterMedicine.php" class="active">
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
                <a href="pacientes.php" title="Pacientes">
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
        <div>
          <article>
            <div class="mensaje">
              <h2>CenterMedicine</h2>
            </div>
              <p><img src="img/doctor (4).png">
              </p><br/><br/>
              <p>Bienvenido a <b>Easy Life</b>! un Sistema de Citas Medicas para  exámenes médicos de ingreso.</p>
              <br/><br/>
              <h3>Nuestras funciones</h3><br/>
              <p>	- Gestion de Citas <br/>
                - Gestion de Medicos <br/>
                - Gestion de Pacientes <br/>
                - Gestion de Consultorios <br/>
                - Gestion de Usuarios con Acceso al Sistema <br/>
              </p>
          </article>
        </div>
      </div> 
  </div>
  
</div>	

</body>
</html>