<?php
    class DatabaseDonativos{
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
                // echo 'Conectado correctamente';
            } catch (PDOException $e) {
                echo 'Fallo la conexion: ' . $e->getMessage();
            }

            return $gbd;
        }

        public function getAll(){
            $sql = "SELECT 20_donativos.id, 20_donativos.fecha, 20_donativos.cantidad, 20_usuarios.nombre AS 'nomUser', 20_usuarios.apellidos AS 'nomApell'
            FROM 20_donativos
            LEFT JOIN 20_usuarios ON 20_donativos.usuarios_id = 20_usuarios.id";
            $resultados = self::conectar()->query($sql);
            return $resultados;
        }

        public function delete($tabla, $id){
            $sql = "DELETE FROM $tabla WHERE id = $id";
            self::conectar()->query($sql);
        }

        public function getId($id){
            $sql = "SELECT * FROM 20_donativos WHERE id = $id";
            $resultados = self::conectar()->query($sql);
            return $resultados->fetch(PDO::FETCH_ASSOC);
        }

        public function actualizar($valores){
            $sql = "UPDATE 20_donativos SET fecha = '$valores[1]', cantidad = $valores[2], usuarios_id = $valores[3] WHERE id = $valores[0]";
            self::conectar()->exec($sql);
        }
    }
?>