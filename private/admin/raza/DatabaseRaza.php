<?php

    class DatabaseRaza{

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
            $sql = "SELECT 20_raza.id, 20_raza.nombre, 20_tipo.nombre AS 'tipo'
            FROM 20_raza
            LEFT JOIN 20_tipo ON 20_raza.tipo_id = 20_tipo.id";
            $resultados = self::conectar()->query($sql);
            return $resultados;
        }

        public function delete($tabla, $id){
            $sql = "DELETE FROM $tabla WHERE id = $id";
            self::conectar()->query($sql);
        }

        public function guardar($valores){
            $sql = "INSERT INTO 20_raza (nombre, tipo_id) VALUES ('$valores[0]', $valores[1])";
            self::conectar()->exec($sql);
        }

        public function getId($id){
            $sql = "SELECT * FROM 20_raza WHERE id = $id";
            $resultados = self::conectar()->query($sql);
            return $resultados->fetch(PDO::FETCH_ASSOC);
        }

        public function actualizar($valores){
            $sql = "UPDATE 20_raza SET nombre = '$valores[1]', tipo_id = $valores[2] WHERE id = $valores[0]";
            self::conectar()->exec($sql);
        }
    }
?>