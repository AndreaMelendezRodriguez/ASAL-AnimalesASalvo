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

        public function getId($id){
            $sql = "SELECT animales.id, animales.nombre, animales.edad, animales.fecha_nacimiento, animales.fecha_entrada, estado.nombre AS 'estado', usuarios.nombre AS 'nomUser', usuarios.apellidos AS 'nomApell', tamanio.nombre AS 'tamanio', sexo.tipo AS 'sexo', tipo.nombre AS 'tipo', imagenesAnimales.ruta, animales.descripcion
            FROM animales
            LEFT JOIN estado ON animales.estado_id = estado.id
            LEFT JOIN usuarios ON animales.usuarios_id = usuarios.id
            LEFT JOIN tamanio ON animales.tamanio_id = tamanio.id
            LEFT JOIN sexo ON animales.sexo_id = sexo.id
            LEFT JOIN tipo ON animales.tipo_id = tipo.id
            LEFT JOIN imagenesAnimales ON animales.id =imagenesAnimales.animales_id
            WHERE animales.id = $id";
            $resultados = $this->conectar()->query($sql);
            return $resultados->fetch(PDO::FETCH_ASSOC);
        }
    }
?>