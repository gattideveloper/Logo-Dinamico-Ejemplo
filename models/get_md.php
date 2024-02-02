<?php
    class Get_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
    
        public function Get_User(){
            $consult = $this->conexion->query("CALL SP_Get_User()");
            return $consult;
        }

        public function Get_UserId($data1){
            $consult = $this->conexion->query("CALL SP_Get_UserId('$data1')");
            return $consult;
        }
    }
?>