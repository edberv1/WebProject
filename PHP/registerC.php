<?php

class DatabaseRegister
{
    public $server = 'localhost';
    public $username = 'root';
    public $password;
    public $database = 'donation';
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo 'Connection was not successful!' . $e->getMessage();
        }
    }

    public function emailExists()
    {
        try {
            $email = $_POST['email'];
            $email = mysqli_real_escape_string($this->conn, $email);
            $sql = "SELECT COUNT(*) AS count FROM register WHERE email='$email'";
            $result = mysqli_query($this->conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row["count"] > 0;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->emailExists()) {
                echo "<script>alert('This email is already registered!')</script>";
                echo "<script>window.location.href = 'register.php';</script>";
                return;
            } else {
                $query = "INSERT INTO register(name, surname, email, password, user_type) VALUES ('$name', '$surname','$email', '$password', 'user')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You are successfully registered!');</script>";
                    echo "<script>window.location.href = 'login.php';</script>";
                } else {
                    echo "<script>alert('This user already exists!');</script>";
                    echo "<script>window.location.href = 'home.php';</script>";
                }
            }
        }
    }

    public function insert2()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user_type = $_POST['user_type'];

            if ($this->emailExists()) {
                echo "<script>alert('This email is already registered!')</script>";
                echo "<script>window.location.href = 'userAdd.php';</script>";
                return;
            } else {
                $query = "INSERT INTO register(name, surname, email, password, user_type) VALUES ('$name', '$surname','$email', '$password', '$user_type')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You are successfully registered!');</script>";
                    echo "<script>window.location.href = 'userDashboard.php';</script>";
                } else {
                    echo "<script>alert('This user already exists!');</script>";
                    echo "<script>window.location.href = 'userDashboard.php';</script>";
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;
        $query = "SELECT * FROM register";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function check()
    {

        if (isset($_POST['submit'])) {


            $email = $_POST['email'];
            $password = $_POST['password'];
            $user_type = $_POST['user_type'];

            $select = "SELECT * FROM register WHERE email = '$email' && password = '$password' ";

            $result = mysqli_query($this->conn, $select);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_array($result);

                if ($row['user_type'] == 'admin') {

                    echo "<script>alert('You are successfuly logged in!');</script>";
                    echo "<script>window.location.href = 'dashboard.php';</script>";
                } elseif ($row['user_type'] == 'user') {

                    echo "<script>alert('You are successfuly logged in!');</script>";
                    echo "<script>window.location.href = 'home.php';</script>";

                }

            } else {
                echo "<script>alert('The email or password is invalid!');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            }

        }
        ;
    }


    public function delete($id)
    {

        $query = "DELETE FROM register where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id)
    {

        $data = null;

        $query = "SELECT * FROM register WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {

        $query = "UPDATE register SET name='$data[name]', surname='$data[surname]', email='$data[email]', password='$data[password]', user_type='$data[user_type]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}

?>