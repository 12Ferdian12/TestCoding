<?php
    include 'function.php';

    if(isset($_POST["btn-submit"])){
        $name = $_POST["name"];
        $noHp = $_POST["noHp"];
        
        $result = insertData($name, $noHp);
        if ($result) {
            echo "Data berhasil ditambahkan";
        } else {
            echo "Data gagal ditambahkan";
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-xxl">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Akmal</td>
                    <td>1234</td>
                </tr>
            </tbody>
        </table>
        <form method="POST">
            <div class="row mt-5">
                <div class="col-2" >
                    Nama
                </div>
                <div class="col-1" >
                    :
                </div>
                <div class="col-2" >
                    <input type="text" name="name" id="">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2" >
                    No Hp
                </div>
                <div class="col-1" >
                    :
                </div>
                <div class="col-2" >
                    <input type="text" name="noHp">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-2" >
                    <button type="submit" class="btn btn-primary" name="btn-submit">Tambah</button>
                </div>
            </div>
        </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>