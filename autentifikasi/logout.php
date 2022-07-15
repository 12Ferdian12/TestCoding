<?php 
session_start();
session_destroy();
echo '<script>
        document.location.href="loginScreen.php";
        alert("Anda berhasil logout");
        </script>';
