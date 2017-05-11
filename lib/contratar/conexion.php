<?php

class Conexion {
    var $objconn;
    
    
    /*metodo de conexion*/
    var $dbusr="root";
    var $dbpwd="avaras08";
    var $dbhost="localhost";
    var $dbname="exportaciones";
    
    public function conectar(){
        $this->objconn=new mysqli($this->dbhost,
        $this->dbusr, $this->dbpwd, $this->dbname);
        
        if($this->objconn->connect_errno){
            return "Fallo al conectar a MYSQL: (". $this->objconn->connect_errno;
        }
        return true;
    }
}