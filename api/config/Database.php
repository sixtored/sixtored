<?php
   class DBClass{
       // Almacenar la instancia de la conexión
       private $conn;
       //Credenciales de acceso al servidor
       private $host        = "localhost";
       private $dbName      = "misixtored";
       private $userName    = "root";
       private $pwd         = "";

       // Método que obtiene la instancia de la conexión.
       public function getConnection(){
           try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName . ";", $this->userName, $this->pwd);
                $this->conn->exec("SET NAMES utf8");
                // Habilitar el manejo de estados y excepciones
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->conn;
           }catch(PDOException $e){
               echo $e->getMessage();
           }

       }
   } 

 //$pdo = new \PDO(/*...*/);
 //$result = $pdo->query("SHOW TABLES LIKE 'tableName'"); 
 //$tableExists = $result !== false && $result->rowCount() > 0; 
?>
