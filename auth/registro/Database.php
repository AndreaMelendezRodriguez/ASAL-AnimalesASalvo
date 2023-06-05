<?php
    class Database{
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

        public function guardar($valores){
            $sql = "INSERT INTO 20_usuarios (nombre, apellidos, telefono, email, contrasenia, fecha, dni, rol_id) VALUES ('$valores[0]', '$valores[1]', '$valores[2]', '$valores[3]', '$valores[4]', '$valores[5]', '$valores[6]', $valores[7])";
            self::conectar()->exec($sql);
        }
    }
?>