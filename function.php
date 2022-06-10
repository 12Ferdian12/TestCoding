<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully <br>";

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
    
    // // Mengedit data
    // $sql = "UPDATE user
    // Set Name = 'akmal'
    // Where ID = 1";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully <br>";
    // } else {
    //     echo "Error <br>";
    // }

    // // Menghapus data
    // $sql = "DELETE FROM user Where PhoneNumber = '0123456789'";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully <br>";
    // } else {
    //     echo "Error <br>";
    // }

    // // Menampilkan data
    // $sql = "SELECT * FROM user";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["PhoneNumber"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    
?>