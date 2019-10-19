<?php
    session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'cv_gala_sehati') or die(mysqli_error($mysqli));

    $update = false;
    $id = 0;
    $item = "";
    $unit = "";
    $hrg_real = "";
    $hrg_nego = "";

    if (isset($_POST['save'])) {
        $item = $_POST['item'];
        $unit = $_POST['unit'];
        $hrg_real = $_POST['hrg_real'];
        $hrg_nego = $_POST['hrg_nego'];
        $mysqli->query ("INSERT INTO tabel_buah(item, unit, hrg_real, hrg_nego) VALUES('$item', '$unit', '$hrg_real', '$hrg_nego')") or die($mysqli->error());
        $_SESSION['message'] = "Data sudah disimpan!";
        $_SESSION['msg_type'] = "success";
        header("location: database_buah.php");
    }

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM tabel_buah WHERE id=$id") or die($mysqli->error());
        $_SESSION['message'] = "Data sudah dihapus!";
        $_SESSION['msg_type'] = "danger";
        header("location: database_buah.php");
    }

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM tabel_buah WHERE id=$id") or die($mysqli->error());
        $row = $result->fetch_array();
        $item = $row['item'];
        $unit = $row['unit'];
        $hrg_real = $row['hrg_real'];
        $hrg_nego = $row['hrg_nego'];
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $item = $_POST['item'];
        $unit = $_POST['unit'];
        $hrg_real = $_POST['hrg_real'];
        $hrg_nego = $_POST['hrg_nego'];
        $result = $mysqli->query("UPDATE tabel_buah SET item='$item', unit='$unit', hrg_real='$hrg_real', hrg_nego='$hrg_nego'  WHERE id=$id") or die($mysqli->error());
        $_SESSION['message'] = "Tugas berhasil diubah!";
        $_SESSION['msg_type'] = "warning";
        header("location: database_buah.php");
    }
    if (isset($_POST['save1'])) {
        $item = $_POST['item'];
        $unit = $_POST['unit'];
        $hrg_real = $_POST['hrg_real'];
        $hrg_nego = $_POST['hrg_nego'];
        $mysqli->query ("INSERT INTO tabel_sayur(item, unit, hrg_real, hrg_nego) VALUES('$item', '$unit', '$hrg_real', '$hrg_nego')") or die($mysqli->error());
        $_SESSION['message'] = "Data sudah disimpan!";
        $_SESSION['msg_type'] = "success";
        header("location: database_sayur.php");
    }

    if (isset($_GET['delete1'])) {
        $id = $_GET['delete1'];
        $mysqli->query("DELETE FROM tabel_sayur WHERE id=$id") or die($mysqli->error());
        $_SESSION['message'] = "Data sudah dihapus!";
        $_SESSION['msg_type'] = "danger";
        header("location: database_sayur.php");
    }

    if (isset($_GET['edit1'])) {
        $id = $_GET['edit1'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM tabel_sayur WHERE id=$id") or die($mysqli->error());
        $row = $result->fetch_array();
        $item = $row['item'];
        $unit = $row['unit'];
        $hrg_real = $row['hrg_real'];
        $hrg_nego = $row['hrg_nego'];
    }

    if (isset($_POST['update1'])) {
        $id = $_POST['id'];
        $item = $_POST['item'];
        $unit = $_POST['unit'];
        $hrg_real = $_POST['hrg_real'];
        $hrg_nego = $_POST['hrg_nego'];
        $result = $mysqli->query("UPDATE tabel_sayur SET item='$item', unit='$unit', hrg_real='$hrg_real', hrg_nego='$hrg_nego'  WHERE id=$id") or die($mysqli->error());
        $_SESSION['message'] = "Tugas berhasil diubah!";
        $_SESSION['msg_type'] = "warning";
        header("location: database_sayur.php");
    }

?>
