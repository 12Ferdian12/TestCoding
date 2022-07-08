<?php 
include '../function.php';

if(isset($_POST["btn-submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    
    $result = register($name, $email, $password, $role);
    if ($result) {
        echo ' <script>
        alert("Anda berhasil register");
        
        </script>';
    } else {
        echo ' <script>
        alert("register gagal");
        </script>';
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Account</h6>
                    <p class="card-text">
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input required name="name" type="text" class="form-control" id="exampleInputName" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input required name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select name="role"class="form-select" aria-label="Default select example">
                                    <option value="admin">Admin</option>
                                    <option value="kasir">Kasir</option>
                                </select>                    
                            </div>
                            <button type="submit" class="btn btn-primary" name="btn-submit">Submit</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>