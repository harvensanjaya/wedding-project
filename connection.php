<?php

$conn = mysqli_connect("localhost", "u518250902_harvensanjaya", "Erepentokindo004_", "u518250902_wedding");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $harapan = htmlspecialchars($data["harapan"]);

    $query = "INSERT INTO wishes (nama, harapan) VALUES ('$nama', '$harapan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $to = isset($_GET['to']) ? urlencode($_GET['to']) : '';
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = 'index.php?to={$to}';
                var welcomeScreen = document.getElementById('welcome-screen');
                var mainContent = document.getElementById('main-content');

                welcomeScreen.classList.add('fade-out');
                setTimeout(function() {
                    welcomeScreen.classList.remove('active');
                    mainContent.classList.add('active', 'fade-in');
                    play();
                }, 1000); // Sesuaikan delay dengan durasi fade-out
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = 'index.php?to={$to}';
            </script>
        ";
    }
}
