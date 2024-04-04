<?php
Class Connection{
  
    private $server = "mysql:host=localhost;dbname=suahora";
    private $username = "root";
    private $password = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;
     
    public function open(){
        try{
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        }
        catch (PDOException $e){
            echo "Existe algum problema na conexão com o Banco de Dados: " . $e->getMessage();
        }
  
    }
  
    public function close(){
        $this->conn = null;
    }
  
}
?>