<?php
    class DatabaseAnimales{
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
            $sql = "SELECT 20_animales.id, 20_animales.nombre, 20_animales.edad, 20_animales.fecha_nacimiento, 20_animales.fecha_entrada, 20_estado.nombre AS 'estado', 20_usuarios.nombre AS 'nomUser', 20_usuarios.apellidos AS 'nomApell', 20_tamanio.nombre AS 'tamanio', 20_sexo.tipo AS 'sexo', 20_tipo.nombre AS 'tipo'
            FROM 20_animales
            LEFT JOIN 20_estado ON 20_animales.estado_id = 20_estado.id
            LEFT JOIN 20_usuarios ON 20_animales.usuarios_id = 20_usuarios.id
            LEFT JOIN 20_tamanio ON 20_animales.tamanio_id = 20_tamanio.id
            LEFT JOIN 20_sexo ON 20_animales.sexo_id = 20_sexo.id
            LEFT JOIN 20_tipo ON 20_animales.tipo_id = 20_tipo.id";
            $resultados = self::conectar()->query($sql);
            return $resultados;
        }

        public function delete($tabla, $id){
            $sql = "BEGIN;
                    UPDATE 20_imagenesAnimales SET animales_id = NULL WHERE animales_id = $id;
                    DELETE FROM $tabla WHERE id = $id;
                    COMMIT";
            self::conectar()->query($sql);
        }

        public function guardar($valores){
            $sql = "INSERT INTO 20_animales (nombre, edad, fecha_nacimiento, fecha_entrada, estado_id, usuarios_id, tamanio_id, sexo_id, tipo_id, descripcion) VALUES ('$valores[0]', $valores[1], '$valores[2]', '$valores[3]', $valores[4], $valores[5], $valores[6], $valores[7], $valores[8],'$valores[9]')";
            self::conectar()->exec($sql);
        }

        public function getId($id){
            $sql = "SELECT * FROM 20_animales WHERE id = $id";
            $resultados = self::conectar()->query($sql);
            return $resultados->fetch(PDO::FETCH_ASSOC);
        }

        public function actualizar($valores){
            $sql = "UPDATE 20_animales SET nombre = '$valores[1]', edad = $valores[2], fecha_nacimiento = '$valores[3]', fecha_entrada = '$valores[4]', estado_id = $valores[5], usuarios_id = $valores[6], tamanio_id = $valores[7], sexo_id = $valores[8], tipo_id = $valores[9], descripcion = '$valores[10]' WHERE id = $valores[0]";
            self::conectar()->exec($sql);
        }
    }
?>