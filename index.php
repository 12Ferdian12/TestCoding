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
    $data = showData();
    // var_dump($data);

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
                    <th scope="col" >ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $row): ?>
                    <tr>
                        <td><?php echo $row['ID'] ?></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['PhoneNumber'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ID'] ?>" class="btn btn-primary" >Edit</a>
                            <a onclick="return confirm('data ingin di hapus?');" href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
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
                    <input type="text" name="name" id="" onkeypress="return onlyAlphabetKey(event)" maxlength="10">
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
                    <input type="text" name="noHp" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" onkeypress="return onlyNumberKey(event)">
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
  <script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
    function onlyAlphabetKey(evt) {
          
          // Only ASCII character in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return true;
          return false;
      }
</script>
</html>