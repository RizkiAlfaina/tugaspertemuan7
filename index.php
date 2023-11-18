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
        <h2>List</h2>
        <a class="btn btn-primary" href='create.php' role="button">Add</a>
        <br>
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by Prodi" name="search_prodi">
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "nama_mhs";
                
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }    

                $search_prodi = isset($_GET['search_prodi']) ? $_GET['search_prodi'] : '';

                $sql = "SELECT * FROM mhs";
                if (!empty($search_prodi)) {
                    $sql .= " WHERE prodi LIKE '%$search_prodi%'";
                }

                $result = $conn->query($sql);

                if (!$result){
                    die("Invalid query: " . $conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[nim]</td>
                        <td>$row[nama]</td>
                        <td>$row[prodi]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?nim=$row[nim]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?nim=$row[nim]'>Delete</a>
                        </td>
                    </tr>
                    ";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
