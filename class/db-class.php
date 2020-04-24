<?php
class DB{
    private $host;
    private $port;
    private $dbName;
    private $user;
    private $password;

    public function __construct($cfgHost, $cfgPort, $cfgDbName, $cfgUser, $cfgPassword){
        $this->host = $cfgHost;
        $this->port = $cfgPort;
        $this->dbName = $cfgDbName;
        $this->user = $cfgUser;
        $this->password = $cfgPassword;

        return true;
    }
    // __construct() END

    public function getConnection(){
        //starting database variable
        $dbConnection = null;
    
        try {
            //open connection
            $dbConnection = new PDO("mysql:
                    host=$this->host;
                    port=$this->port;
                    dbname=$this->dbName;
                    charset=utf8mb4", 
                $this->user, 
                $this->password, 
                array(
                    PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION
                    )
                );

            return $dbConnection;
            
        } catch (PDOException $e) {
            //database connection errors
            echo "Error!: " . $e->getMessage() . "<br/>";
            return false;
        }
    }
    //getConnection() END

}
