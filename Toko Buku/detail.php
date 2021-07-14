<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="sidebar">
      <header>Menu</header>
      <a href="index.php" class="active">
        <span>Data</span>
      </a>
      <a href="login.php">
        <span>Logout</span>
      </a>
      
    </div>
    <div class="main">
        
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = mysqli_query($connect, "select * from buku where id='$id'");
        while($row = mysqli_fetch_assoc($sql)){
            $no = 1;
            $total = $row["harga"] * ($row["diskon"]/100);
    ?>
        <div class="container mt-5">
            <p><a class="back" href="index.php">Home</a>/ Detail Buku / <?php echo $row['nama_buku'] ?></p>
            <div class="card">
                <div class="card-body">   
                <div class="card-header">
                    <h3 class="title">Profil Buku</h3>
                </div>
                    <table class="box">
                        <tr>
                            <td>nama buku</td>
                            <td>: <?php echo $row['nama_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>kategori</td>
                            <td>: <?php echo $row['kategori_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>penerbit</td>
                            <td>: <?php echo $row['penerbit'] ?></td>
                        </tr>
                        <tr>
                            <td>harga</td>
                            <td>: <?php echo $row['harga'] ?></td>
                        </tr>
                        <tr>
                            <td>diskon</td>
                            <td>: <?php echo $row["harga"] * ($row["diskon"]/100)?></td>
                       
                            
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
        </table>
    </div>
</body>
</html>