<?php
    class Usuario{
        private $nombre;
        private $apellido;
        private $correo;
        private $contrasena;
        
        public function __construct(
            $nombre,
            $apellido,
            $correo,
            $contrasena
        ){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->correo = $correo;
            $this->contrasena = $contrasena;
		}
		
        public function guardarUsuario(){
                $contenidoArchivoUsuarios = file_get_contents('../data/usuarios.json');
                $usuarios = json_decode($contenidoArchivoUsuarios, true);
                for ($i=0; $i<sizeof($usuarios); $i++){
                        if ($usuarios[$i]["correo"] == $this->correo){
                                return null;
                        }
                }
                $usuarios[] = array(
                        "nombre" => $this->nombre,
                        "apellido" => $this->apellido,
                        "correo" => $this->correo,
                        "contrasena" => $this->contrasena
                );
                $archivo = fopen('../data/usuarios.json', 'w');
                fwrite($archivo, json_encode($usuarios));
                fclose($archivo);
                return true;
                
        }
        public static function obtenerUsuario($correo){
                $contenidoArchivoUsuarios = file_get_contents('../data/usuarios.json');
                $usuarios = json_decode($contenidoArchivoUsuarios,true);
                for ($i=0; $i<sizeof($usuarios); $i++){
                        if ($usuarios[$i]["correo"]==$correo){
                                return $usuarios[$i];
                        }
                }
                return null;
        }
        public static function verificarUsuario($correo,$contrasena){
                $contenidoArchivoUsuarios = file_get_contents('../data/usuarios.json');
                $usuarios = json_decode($contenidoArchivoUsuarios,true);
                for ($i=0; $i<sizeof($usuarios); $i++){
                        if ($usuarios[$i]["correo"] == $correo && $usuarios[$i]["contrasena"] == sha1($contrasena)){
                                return $usuarios[$i];
                        }
                }
                return null;
        }
        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of correo
         */ 
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }

        /**
         * Get the value of contrasena
         */ 
        public function getContraseña()
        {
                return $this->contrasena;
        }

        /**
         * Set the value of contrasena
         *
         * @return  self
         */ 
        public function setContraseña($contrasena)
        {
                $this->contrasena = $contrasena;

                return $this;
        }
    }
?>