<?php
    include '../function.php';

    if (is_null($_SESSION['user'])) {
        echo ' <script>
        document.location.href="../autentifikasi/loginScreen.php";
        alert("Anda belum login");
        
        </script>';
    }

    // var_dump($_SESSION);
    
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
    $data = showDataUser();
    // var_dump($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" >
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kasir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Management User</a>
                    </li>
                </ul>
                <a href="autentifikasi/logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container-xxl mt-3">
        <div class="h1 text-center ">Management User</div>
        <a href="create.php" class="btn btn-success mb-3">Tambah</a>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value): ?>
                    <tr>
                        <td><?php echo $value['Nama'];?></td>
                        <td><?php echo $value['Email'];?></td>
                        <td><?php echo $value['Role'];?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $value['ID'];?>" class="btn btn-primary">Edit</a>
                            <a onclick="return confirm('data ingin di hapus?');" href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
  </body>
</html>