
<?php
session_start();

require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];//dio
    $password = $_POST['password'];//jelek

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;//dio
        $_SESSION['level'] = $row['level'];
        $_SESSION['password'] = $password;
        // var_dump($row);
        // exit();
        if ($_SESSION['level'] == 'admin') {
            header("Location: admin_home.php");
        } elseif ($_SESSION['level'] == 'user') {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class='alert alert-info'>Login sukses</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
        } else {
            echo "Unknown user level.";
        }
    } else {
        echo "<div class='alert alert-danger'>Login Gagal</div>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
}

$koneksi->close();