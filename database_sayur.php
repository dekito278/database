<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database CV.GALA SEHATI</title>
    <h2 style="text-align:center"> DATABASE SAYUR </h2>
    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once 'config.php'; ?>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>
     
            <div class="row justify-content-center">
            <form action="config.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Item</label>
                    <input type="text" class="form-control" name="item" value="<?php echo $item; ?>" placeholder="Masukkan nama sayur...">
                </div>
                <div class="form-group">
                    <label>Unit</label>
                    <input type="text" class="form-control" name="unit" value="<?php echo $unit; ?>" placeholder="Unit Kg/ikat..">
                </div>
                <div class="form-group">
                    <label>Harga Penawaran</label>
                    <input type="text" class="form-control" name="hrg_real" value="<?php echo $hrg_real; ?>" placeholder="Masukkan harga...">
                </div>
                <div class="form-group">
                    <label>Harga Nego</label>
                    <input type="text" class="form-control" name="hrg_nego" value="<?php echo $hrg_nego; ?>" placeholder="Masukkan harga nego...">
                </div>
                <div class="form-group">
                <?php if ($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update1">Update Item</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="save1">Simpan Item</button>
                    <a href="list-tabel-sayur.php" class="btn btn-primary">
                      Lihat Table
                    </a>
                <?php endif; ?>
                
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <?php $result = $mysqli->query("SELECT * FROM tabel_sayur") or die($mysqli->error); ?>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>SAYUR SEGAR</th>
                        <th>UNIT</th>
                        <th>HARGA PENAWARAN</th>
                        <th>HARGA NEGO</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['item']; ?></td>
                        <td><?php echo $row['unit']; ?></td>
                        <td><?php echo $row['hrg_real']; ?></td>
                        <td><?php echo $row['hrg_nego']; ?></td>
                        <td>
                            <a href="database_sayur.php?edit1=<?php echo $row['id']; ?>"
                                class="btn btn-info">Edit</a>
                            <a href="config.php?delete1=<?php echo $row['id']; ?>"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>



