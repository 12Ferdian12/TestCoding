<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kasir";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully <br>";

        // login
        function login($email, $password) {
            global $conn;
            $newPassword = md5($password);
            $sql = "SELECT * FROM user Where 
            email = '$email' AND password = '$newPassword'";
            $result = $conn->query($sql);

            $_SESSION['user'] = $result->fetch_assoc();
            
            return $result->fetch_assoc();
        }

    // register
    function register($name, $email, $password, $role) {
        global $conn;
        $password = md5($password);
        $sql = "INSERT INTO user(ID, Nama, Email, Password, Role) 
        VALUES (NULL, '$name', '$email', '$password', '$role')";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $data = findDataId($last_id);
            $_SESSION['user'] = $data;
            return true;
        } else {
            return false;
        }
    }

    // Menambahkan data
    function insertData($name, $noHp) {
        global $conn;
        $sql = "INSERT INTO user(ID, Name, PhoneNumber) 
        VALUES( NULL, '$name', '$noHp')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully <br>";
            return true;
        } else {
            echo "Error <br>";
            return false;
        }
    }
    
    // Mengedit data
    function updateData($name, $noHp, $id){
        global $conn;
        $sql = "UPDATE user Set Name = '$name', PhoneNumber = '$noHp' Where ID = $id";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully <br>";
            return true;
        } else {
            echo "Error <br>";
            return false;
        }
    }
    
    function findDataId($id){
        global $conn;
        $sql = "SELECT * FROM user Where ID = '$id'";
        $result = $conn->query($sql);

        return $result->fetch_assoc();
    }

    // Menghapus data
    function deleteDataUser($id){
        global $conn;
        $sql = "DELETE FROM user Where ID = '$id'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Menampilkan data
    function showDataUser(){
        global $conn;
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["PhoneNumber"]. "<br>"; 
                $data[] = $row; 
            }

            return $data;
        } else {
            return false;
        }
    }
    
    
?>