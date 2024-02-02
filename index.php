<?php
    include ('setting/connection.php');
    require_once "models/main_model.php";

    date_default_timezone_set('America/Argentina/Buenos_Aires');
	
    if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['idUsuario'];

	if(!isset ($_SESSION['idUsuario'])) {
    	header('Location: login.php');
	}

    /*Acá busco el nombre del usuario*/
    $obj_Get = new Get_Model();
    $data_user = $obj_Get->Get_UserId($id_user);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GattiDev ~ Calendario de Alquileres :: Home</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!--/ Font Awesome V6 /-->
	<script src="https://kit.fontawesome.com/e28972e8bb.js" crossorigin="anonymous"></script>

    <!-- FullCalendar -->
	<link href='bookshop/FullCalendario/css/fullcalendar.css' rel='stylesheet' /> 
	<link href='bookshop/FullCalendario/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />

    <!-- Custom CSS Calendario -->
    <link href='css/calendar_style.css' rel='stylesheet' />

</head>
<body>
    <div id="conteiner">
        <div id="body">
            <header id="header">
                <nav class="nav">
		            <ul class="nav__list">
			            <li>
				            <a href="#">Home</a>
			            </li>
                        <li>
                            <a>
                                <i class="fa-solid fa-user-tie fa-xl" style="color: #74C0FC;"></i>
                                <?php 
                                    while($getUser = mysqli_fetch_assoc($data_user)){
        
                                        $name_user = $getUser['name'];
                                        echo $name_user;
                                    }
                                ?>
                            </a>
                            <ul>
                                <li>
                                    <a href="logout.php">
                                        <i class="fa-solid fa-person-walking-dashed-line-arrow-right fa-xl" style="color: #74C0FC;" title="Salir"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
		            </ul>
	            </nav>
            </header>
        
            <main id="main">
                <?php //include ('calendario.php'); ?>
            </main>
        
            <footer id="footer">
                F O O T E R
            </footer>
        </div>
    </div>

    <!-- FullCalendar -->
	<script src='bookshop/FullCalendario/js/moment.min.js'></script>
	<script src='bookshop/FullCalendario/js/fullcalendar.min.js'></script>
	<script src='bookshop/FullCalendario/locale/es.js'></script>
    <script src="bookshop/jQuery/jquery-3.7.1.min.js"></script>
</body>
</html>