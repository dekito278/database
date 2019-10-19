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

  </table>   
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
                    </tr>
                </thead>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['item']; ?></td>
                        <td><?php echo $row['unit']; ?></td>
                        <td><?php echo $row['hrg_real']; ?></td>
                        <td><?php echo $row['hrg_nego']; ?></td>
                        
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div class="row justify-content-center">  
            <a href="Home.php" class="btn btn-primary">Home</a>
        </div>
</body>
</html>