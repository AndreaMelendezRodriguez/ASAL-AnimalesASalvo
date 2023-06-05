<?php

    class DatabaseProductos{

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
            $sql = "SELECT * FROM 20_productos";
            $resultados = self::conectar()->query($sql);
            return $resultados;
        }

        public function delete($tabla, $id){
            $sql = "BEGIN;
                    UPDATE 20_imagenesTienda SET productos_id = NULL WHERE productos_id = $id;
                    DELETE FROM $tabla WHERE id = $id;
                    COMMIT";
            self::conectar()->query($sql);
        }

        public function guardar($valores){
            $sql = "INSERT INTO 20_productos (nombre, precio, stock, descripcion) VALUES ('$valores[0]', $valores[1], $valores[2], '$valores[3]')";
            self::conectar()->exec($sql);
        }

        public function getId($id){
            $sql = "SELECT * FROM 20_productos WHERE id = $id";
            $resultados = self::conectar()->query($sql);
            return $resultados->fetch(PDO::FETCH_ASSOC);
        }

        public function actualizar($valores){
            $sql = "UPDATE 20_productos SET nombre = '$valores[1]', precio = $valores[2], stock = $valores[3], descripcion = '$valores[4]' WHERE id = $valores[0]";
            self::conectar()->exec($sql);
        }

    }

?>