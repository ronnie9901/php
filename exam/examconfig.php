<?php
 


 class Config{
 
   private $host = "localhost";
   private $usermane = "root";
   private $password = "";
   private $datbase = "exam";
   private $connection;
   public function connect()
   {
     $this->connection = mysqli_connect($this->host,$this->usermane,$this->password,$this->datbase);
       
   }

   public function __construct()
{
 $this->connect();
}

public function insert ($name,$email,$phone)
    {
      $query = "INSERT INTO users (name,email,phone) VALUES('$name','$email',$phone)";
      $res = mysqli_query($this->connection,$query);
     return  $res;
    }  

    public function productinsert ($product_name,$price)
    {
      $query = "INSERT INTO product (product_name,price) VALUES('$product_name',$price)";
      $res = mysqli_query($this->connection,$query);
     return  $res;
    }

    public function oderinsert ($oder_date,$status)
    {
      $query = "INSERT INTO oders (oder_date,status) VALUES('$oder_date','$status')";
      $res = mysqli_query($this->connection,$query);
     return  $res;
    }

    public function fetch()
    {
      $query = "SELECT * FROM users";
      $res = mysqli_query($this->connection, $query);
      return $res;
    }


    public function update( $id,$product_name,$price)
    {
      $query =" UPDATE product SET `product_name`='$product_name',`price`='$price' WHERE id= $id   ";
      $res = mysqli_query($this->connection,$query);
     return  $res;
    }

    public function delete ( $id,)
    {
      $query =" DELETE FROM oders WHERE  id =$id  ";
      $res = mysqli_query($this->connection,$query);
     return  $res;
    }
 }

 
?>

