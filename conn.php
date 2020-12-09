<?php
class Connection{
    private $username = "root";
    private$servername = "localhost";
    private $dbpassword = "";
    private $dbname = "fe14092022";
    private $connection = "";

    public function get_connection(){
        $this->connection = new mysqli($this->servername,$this->username, $this->dbpassword, $this->dbname);
        if(mysqli_connect_error()) {
            trigger_error( mysqli_connect_error());
        }
        else{
           return $this->connection;
        }
    }


}
?>