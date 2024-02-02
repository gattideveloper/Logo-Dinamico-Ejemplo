<?php 
  	if(!isset($_SESSION)){
        session_start();
    }
    
    include ('../setting/connection.php');
    require_once "../models/main_model.php";

    function Good() {
        header("Location: ../index.php");
    }

    function Mistake(){
        header("Location: ../login.php"); 
    }

    $obj_Get = new Get_Model();
  
    $pass_data = $_POST['password'];

    $data_user = $obj_Get->Get_User();
    
    if(empty($data_user)){
        Mistake();
    }else{
        while($getUser = mysqli_fetch_assoc($data_user)){
        
        	$pass_user = $getUser['password'];
            
            if($pass_data == $pass_user){
            	$id_user = $getUser['id'];
            	$name_user = $getUser['name'];
            	$_SESSION['idUsuario'] = $id_user;
                $_SESSION['nomeUsuario'] = $name_user;
                Good();
            } else{
                Mistake();
            }
        } 
    }
?>