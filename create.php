<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "nama_mhs";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


$nim = "";
$nama = "";
$prodi = "";

$errorMessage = "";
$successMessage ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];

    do{
        if (empty($nim) || empty($nama) || empty($prodi)){
            $errorMessage = "Kolom tidak boleh kosong";
            break;
        }

        $sql = "INSERT INTO mhs (nim, nama, prodi)" . 
                "VALUES ('$nim', '$nama', '$prodi')";  
        $result = $conn->query($sql);
        
        $nim = "";
        $nama = "";
        $prodi = "";

        $successMessage = "Masuk kok datanya";

        header("location: index.php");
        exit;
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7 Tugas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Buat Data </h2>

        <?php
        if (!empty($errorMessage)){
            echo "<p style='color: red'>".$errorMessage."</p>";
        }    
        ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nim" value="<?php echo $nim; ?>">
                </div>   
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>   
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Prodi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="prodi" value="<?php echo $prodi; ?>">
                </div>   
            </div>

            <?php
            if (!empty($successMessage)){
                echo "<p style='color: green'>".$successMessage."</p>";
            }

            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="index.php" role="button">Cancel</a>
                </div>

            </div>
        </form>
    </div>
</body>
</html>