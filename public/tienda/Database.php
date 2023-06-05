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

        public function getAll(){
            $sql = "SELECT productos.id, productos.nombre, productos.precio, productos.stock, productos.descripcion, imagenesTienda.ruta
            FROM productos
            LEFT JOIN imagenesTienda ON productos.id =imagenesTienda.productos_id";
            $resultados = self::conectar()->query($sql);
            return $resultados;
        }
    }
?>