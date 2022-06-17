<?php
    include 'function.php';

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        
        $result = deleteData($id);
        if ($result) {
            echo ' <script>
            alert("data berhasil di dihapus");
            document.location.href="index.php";
            </script>';
        } else {
            echo ' <script>
            alert("data berhasil di dihapus");
            document.location.href="index.php";
            </script>';
        }
    }

?>