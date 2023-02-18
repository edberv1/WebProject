<?php

class DatabaseDonatePlants{
    private $server = 'localhost';
    private $username = 'root';
    private $password;
    private $database = 'donation';
    private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        }catch(Exception $e){
            echo 'Connection was not successful!' .$e->getMessage();
        }       
    }

    public function insert(){
        if(isset($_POST['submit'])){
    
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email']; 
            $number = $_POST['number'];
            $plants = $_POST['plants'];

            $query = "INSERT INTO donate_plants(name, surname, email, phoneNumber, plants) VALUES ('$name', '$surname','$email', '$number','$plants')";
            if ($sql = $this->conn->query($query)) {

                echo "<script>alert('Thanks for the donation!);</script>";
                echo "<script>window.location.href = 'home.php';</script>";
            }
    
        else{
            echo "<script>alert('You are not registered! Please register!');</script>";
            echo "<script>window.location.href = 'register.php';</script>";
             }
        }
    }

    public function check(){
        
        if(isset($_POST['submit'])){

            
            $email = $_POST['email']; 
            
         
            $select = "SELECT * FROM register WHERE email = '$email' ";
         
            $result = mysqli_query($this->conn, $select);
         
            if(mysqli_num_rows($result) > 0){
         
               $row = mysqli_fetch_array($result);
         
               if($row['email'] == $email){
                
                echo "<script>alert('Thanks for the donation!);</script>";
                echo "<script>window.location.href = 'home.php';</script>";
                $this->insert();
               }
              
            }
            else{
                echo "<script>alert('You are not registered! Please register!');</script>";
            echo "<script>window.location.href = 'register.php';</script>";
            }
         
         };
    }

    public function check2(){
        
        if(isset($_POST['submit'])){

            
            $email = $_POST['email']; 
            
         
            $select = "SELECT * FROM register WHERE email = '$email' ";
         
            $result = mysqli_query($this->conn, $select);
         
            if(mysqli_num_rows($result) > 0){
         
               $row = mysqli_fetch_array($result);
         
               if($row['email'] == $email){
                
                echo "<script>alert('Thanks for the donation!);</script>";
                echo "<script>window.location.href = 'home.php';</script>";
                $this->insert();
               }
              
            }
            else{
                echo "<script>alert('You are not registered! Please register!');</script>";
            echo "<script>window.location.href = 'register.php';</script>";
            }
         
         };
    }

    public function fetch(){
        $data = null;
        $query = "SELECT * FROM donate_plants";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    

    public function delete($id){

        $query = "DELETE FROM donate_plants where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function edit($id){

        $data = null;

        $query = "SELECT * FROM donate_plants WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){
        
        $query = "UPDATE donate_plants SET name='$data[name]', surname='$data[surname]', email='$data[email]', phoneNumber='$data[number]', plants='$data[plants]'  WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

}
?>