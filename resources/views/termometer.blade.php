<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data dari Database</title>
    <!-- Tambahkan link ke Bootstrap CSS jika Anda menggunakannya -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container">
        <h1>Data dari Database</h1>

        <?php
        // Menghubungkan ke database (ganti dengan informasi database Anda)
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "nama_database";

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data dari database
        $sql = "SELECT * FROM nama_tabel";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>ID</th><th>Nama</th><th>Alamat</th></tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["alamat"] . "</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "Tidak ada data.";
        }

        // Menutup koneksi
        $conn->close();
        ?>

    </div>
    <!-- Tambahkan link ke Bootstrap JS jika Anda menggunakannya -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
