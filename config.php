<?php 


class Config{


    private $host ="localhost";
    private $username= "root";
    private $passward ="";
    private $database ="emp";
    private $conntection;

    public function connect()
    {
        $this->conntection = mysqli_connect($this->host,$this->username,$this->passward,$this->database);

       
    }
   
    public function insert($name,$phone_number, $age ,$standard)
    {
        $query = "INSERT INTO employe  (name ,phone_number,age,standard)  VALUES ('$name', $phone_number ,$age ,'$standard')" ;
         $res  = mysqli_query($this->conntection,$query);
    }
    public  function __construct()
    {
         $this -> connect();
    }

}

?>