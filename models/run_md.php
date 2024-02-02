<?php
    class Run_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function Run_Event(){
            $consult = $this->conexion->query("CALL SP_Run_Event()");
            return $consult;
        }
    }
?>