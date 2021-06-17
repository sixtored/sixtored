<?php
    class Consulta{
        // MVC - Model<->View(VFP)<->Controller
        // Conexión a la base de datos
        private $conn;

        // Nombre de la tabla
        private $table_name = "consultas";

        // Lista de propiedades
        public $id;
        public $nombre;
        public $email;
        public $asunto;
        public $mensaje;
        public $created_at;
        public $modified_at;
        public $deleted_at;
        private $lastErrorTxt;

        /*
        // constructor con el objeto de la conexión.
        procedure init
            *-- Constructor goes here.
        endproc
        */
        public function __construct($db){
            $this->conn = $db;
        }

        /*
            VFP's Getters N' Setters

            PROTECTED lastErrorTxt
            
            ** Getter
            FUNCTION lastErrorTxt_Access
                RETURN THIS.lastErrorTxt
            ENDFUNC

            ** Setter
            PROTECTED FUNCTION lastErrorTxt_Assign
                LPARAMETERS vNewVal
                THIS.lastErrorTxt = m.vNewVal
            ENDFUNC
        */

        // getter de lastErrorTxt
        public function getLastErrorTxt(){
            return $this->lastErrorTxt;
        }
        // setter de lastErrorTxt
        protected function setLastErrorTxt($txt){
            $this->lastErrorTxt = $txt;
        }

        // read
        // readOne
        // create
        // update
        // delete
        // devuelve el objeto $stmt con la consulta.
        function read(){
            // escribir la consulta
            $query = "SELECT 
                    id,
                    nombre,
                    email,
                    asunto,
                    mensaje,
                    created_at,
                    modified_at
                FROM 
                    " . $this->table_name . "
                WHERE ISNULL(deleted_at)" ;
            try{
                // Preparar la consulta
                $stmt = $this->conn->prepare($query);
                // ejecutar la consulta y devolver la variable $stmt
                $stmt->execute();

                return $stmt;                
            }catch(PDOException $e){
                $this->setLastErrorTxt($e->getMessage());
            }
        }

       /*
       Funcion  ifexisttable devuelve true si existe y false si no existe
       $query = 'CREATE TABLE particip (id int(8) ZEROFILL NOT NULL AUTO_INCREMENT, nombre varchar(30) NOT NULL, apellido VARCHAR(30) NOT NULL , pais VARCHAR(20) NOT NULL, ciudad VARCHAR(30) NOT NULL, tdoc VARCHAR(10) NOT NULL, docu VARCHAR(15) NOT NULL,  email VARCHAR(60) NOT NULL, fecha date DEFAULT current_timestamp(), pasword VARCHAR(50) NOT NULL, PRIMARY KEY(id)) ENGINE = InnoDB CHARSET=latin1 COLLATE latin1_spanish_ci' ;
       */ 
       function  ifexisttable(){
        $sql = "
        SELECT 1 FROM  ". $this->table_name ." WHERE 1 LIMIT 1" ;
        try {
            $stmt = $this->conn->prepare($sql); 
            if ($stmt->execute()) {
                return true ;
                } else {
                //return false ;
                $sql = "CREATE TABLE consultas (id int(11) ZEROFILL NOT NULL AUTO_INCREMENT, nombre VARCHAR(40) NOT NULL, email VARCHAR(50) NOT NULL, asunto VARCHAR(30), mensaje VARCHAR(60) NOT NULL, created_at timestamp NOT NULL DEFAULT current_timestamp, modified_at timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP, deleted_at timestamp NULL DEFAULT NULL, PRIMARY KEY(id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute() ;
                return true ;
                // aqui deberia crearse la tabla consultas
                }

            }catch(PDOException $e) {
                $this->setLastErrorTxt($e->getMessage());
            }
       }
        // Devuelve el registro cargado en las propiedades.
        function readOne(){
            /*
                private id as integer
                m.id = 14
            */
            /*
            $sql = "
                SELECT
                    id,
                    codigo,
                    descripcion,
                    created_at,
                    modified_at
                FROM " . $this->table_name . "
                WHERE 
                    id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(1, $this->id);
            */
            $sql = "
                SELECT
                    id,
                    nombre,
                    email,
                    asunto,
                    mensaje,
                    created_at,
                    modified_at
                FROM " . $this->table_name . "
                WHERE 
                    ISNULL(deleted_at) AND
                    id = :id LIMIT 1";
            
            // Messagebox(cSql)
            // CLEAR EVENTS
            // QUIT            
            //die("consulta SQL: " . $sql);
            try{
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':id', $this->id);
                $stmt->execute();    
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // Llenar las propiedades con los valores de las columnas.
                // LOCAL aPaises(3)
                // aPaises[1] = 'Argentina'
                // aPaises[2] = 'Bolivia'
                // aPaises[3] = 'Colombia'
                // ?aPaises[2]
                //////////////////////////////////
                $this->nombre       = $row['nombre'];
                $this->email        = $row['email'];
                $this->asunto       = $row['asunto'];
                $this->mensaje      = $row['mensaje'];
                $this->created_at   = $row['created_at'];
                $this->modified_at  = $row['modified_at'];
            }catch(PDOException $e){
                $this->setLastErrorTxt($e->getMessage());                
            }
        }


        // método create
        function create(){
            $sql = "
            INSERT INTO " . $this->table_name . "
            (
                nombre,
                email,
                asunto,
                mensaje
            ) VALUES
            (
                :nombre,
                :email,
                :asunto,
                :mensaje
            )";
                        
            try{
                // Preparar la consulta
                $stmt = $this->conn->prepare($sql);
                // Enlace de Parámetros            
                // Sanear los campos
                $this->nombre = htmlspecialchars(strip_tags($this->nombre));
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->asunto = htmlspecialchars(strip_tags($this->asunto));
                $this->mensaje = htmlspecialchars(strip_tags($this->mensaje));
                // Fin Sanear los campos

                $stmt->bindParam(':nombre', $this->nombre);
                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':asunto',$this->asunto);
                $stmt->bindParam(':mensaje',$this->mensaje);
                
                if ($stmt->execute()){
                    // Obtener el id
                    $this->id = $this->conn->lastInsertId();
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                $this->setLastErrorTxt($e->getMessage());
            }
        }

        // update
        function update(){
            $sql = "
            UPDATE
                " . $this->table_name . "
            SET
                nombre = :nombre,
                email  = :email,
                asunto = :asunto,
                mensaje= :mensaje 
            WHERE
                id = :id
            LIMIT 1";            
            try{
                // Sanear los campos
                $this->nombre = htmlspecialchars(strip_tags($this->nombre));
                $this->email  = htmlspecialchars(strip_tags($this->email));
                $this->asunto = htmlspecialchars(strip_tags($this->asunto));
                $this->mensjae = htmlspecialchars(strip_tags($this->mensaje));
                $stmt = $this->conn->prepare($sql);            
                $stmt->bindParam(':nombre', $this->nombre);
                $stmt->bindParam(':email',$this->email);
                $stmt->bindParam(':asunto',$this->asunto);
                $stmt->bindParam(':mensaje',$this->mensaje);
                $stmt->bindParam(':id', $this->id);            
                // Ejecutar y devolver el resultado
                if ($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                $this->setLastErrorTxt($e->getMessage());
            }
        }

        // delete
        function delete(){
            $sql = "DELETE FROM ". $this->table_name . " WHERE id=:id LIMIT 1";
            try{
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':id', $this->id);
                if ($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                $this->setLastErrorTxt($e->getMessage());
            }
        }
    }
?>
