<?php
session_start();
include ("conek.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Order</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>
body {
	color: #fff;
	background: #3598dc;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
}
</style>
</head>
<body>
    <?php
    if(isset($_POST['nama'])){
		$nomorhp = $_POST['nomorhp'];
		$nama = $_POST['nama'];
		$namabarang = $_POST['namabarang'];
		$harga = $_POST['harga'];
		$alamat = $_POST['alamat'];

		$query =mysqli_query($conn, "INSERT INTO datatransaksi(nama,hp,namabarang,harga,alamat) values('$nama','$nomorhp','$namabarang','$harga','$alamat')");
		if($query) {
			echo '<script>alert("Pemesanan Berhasil");
			location.href="home.php"</script>';
		}else {
			echo '<script>alert("Pemesanan Gagal")</script>';
		}
    }   
    ?>
<div class="signup-form">
    <form method="post">
		<h2>Order Now</h2>
		<p>Selamar Datang Di Form Order</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="nama" placeholder="Masukan Nama Anda" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="nomorhp" placeholder=" Nomor Hp" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="namabarang" placeholder="Masukan Nama Barang" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="harga" placeholder="Masukan Harga" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="alamat" placeholder="alamat" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Order Now</button>
        </div>
    </form>
	<div class="hint-text">Mau Dibatalin<a href="home.php">klik disini</a></div>
</div>
</body>
</html>