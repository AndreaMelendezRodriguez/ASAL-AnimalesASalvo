<?php
    class Database {
        public function conectar(){

            $driver = "mysql";
            $host = 'localhost';
            $port = '3306';
            $bd = 'protectora';
            $user = 'root';
            $password = "";

            $dsn = "$driver:dbname=$bd;host=$host;port=$port";

            try{
                $gbd = new PDO($dsn, $user, $password);
                //echo 'Conectado correctamente';
            } catch (PDOException $e) {
                echo 'Fallo la conexion: ' . $e->getMessage();
            }
            return $gbd;
        }

      public function login($email, $pass){
        $sql = "SELECT * FROM 20_usuarios WHERE email='$email' AND contrasenia = '$pass'";
        $user = self::conectar()->query($sql);
        if($user != null){
            return $user->fetch(PDO::FETCH_ASSOC);
        }
        return null;
      }
    }
?>