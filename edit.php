<?php
    include 'function.php';

    if(isset($_POST["btn-submit"])){
        $name = $_POST["name"];
        $noHp = $_POST["noHp"];
        $id = $_POST["id"];
        
        $result = updateData($name, $noHp, $id);
        if ($result) {
            echo ' <script>
            alert("data berhasil diedit");
            document.location.href="index.php";
            </script>';
        } else {
            echo ' <script>
            alert("data tidak berhasil diedit");
            document.location.href="index.php";
            </script>';
        }
    }

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        
        $result = findData($id);
        // var_dump($result);
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

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $result['ID']?>">
            <div class="row mt-5">
                <div class="col-2" >
                    Nama
                </div>
                <div class="col-1" >
                    :
                </div>
                <div class="col-2" >
                    <input type="text" name="name" id="" value="<?php echo $result['Name']?>">
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
                    <input type="text" name="noHp" value="<?php echo $result['PhoneNumber']?>">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-2" >
                    <button type="submit" class="btn btn-primary" name="btn-submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>