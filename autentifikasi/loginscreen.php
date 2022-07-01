<?php
    include '../function.php';

    if(isset($_POST["btn-submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $result = login($email, $password);
        if ($result) {
            echo ' <script>
            alert("Anda berhasil login");
            document.location.href="../index.php";
            </script>';
        } else {
            echo ' <script>
            alert("email atau password salah");
            </script>';
        }
    }
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid" style="background-color:aqua; height:100vh;">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card px-2 py-2">
                <div class="card-body">
                    <h5 class="card-title h2">Login</h5>
                    <form method="POST" class="mt-5">
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>