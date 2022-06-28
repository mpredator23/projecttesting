<?php 
$sever ='localhost';
$usernm ='root';
$pass = '';
$db = 'bukutamu';

  $conn = mysqli_connect($sever,$usernm,$pass);
    mysqli_select_db($conn,$db) or die ('I cannot connect to database because: '.mysqli_error());
?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = sprintf("SELECT * FROM tamu WHERE id='$id'");
$result = mysqli_query($conn,$query);

while ($res = mysqli_fetch_array($result))
{
    $a=$res['nama'];
    $b=$res['alamat'];
    $c=$res['jeniskelamin'];  
    $d=$res['pesan']; 
}
?>


<html>
</head>
	<title>Buku Tamu</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

	<div id="container">
		<h1>Buku Tamu</h1>
		<h4>Silahkan isi buku tamu di bawah ini dan Tinggalkan Pesan!</h4>
 <form action="edit.php" method="post">
     
     <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" >
     
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama" value="<?php echo $a;?>" placeholder="Nama Lengkap" required /></p>
			<p><b>Alamat :</b><br><input type="text" name="alamat" value="<?php echo $b;?>" placeholder="Nama jalan No XX, Kota, Provinsi" required /></p>
     
            <b>Jenis Kelamin :</b> <br>
			<input type="radio" name="gender" value=Pria <?php if ($c == "Pria") { echo 'checked=checked';} ?> >Pria
            <input type="radio" name="gender" value="Wanita" <?php if ($c == "Wanita") { echo 'checked=checked';} ?> >Wanita
     
			<p><b>Pesan :</b><br><textarea name="pesan" rows="5" cols="50" placeholder="Hai, Semangat terus" required><?php echo $d;?></textarea></p>
     
			<p><input type="submit" name="update" value="Update" onclick="return confirm('Apa anda yakin ingin merubah data ini?');" /></p> 
		</form>
        
        
        <?php
        if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $a=$_POST['nama'];
    $b=$_POST['alamat'];
    $c=$_POST['gender'];  
    $d=$_POST['pesan']; 
    
    // checking empty fields
    if (empty($a) || empty($b) || empty($c) || empty($d)) {            
        if(empty($a)) {
            echo "<font color='red'>Nama tidak ada.</font><br/>";
        }
        
        if(empty($b)) {
            echo "<font color='red'>ALmat tidak ada.</font><br/>";
        }
        
        if(empty($c)) {
            echo "<font color='red'>Jenis Kelamin tidak ada.</font><br/>";
        }   
        if(empty($d)) {
            echo "<font color='red'>Pesan tidak ada.</font><br/>";
        }  
    } else {    
        $result = mysqli_query($conn,"UPDATE tamu SET nama='$a',alamat='$b',jeniskelamin='$c',pesan='$d' WHERE id=$id");
        
        echo '<script language="javascript">alert("Terima kasih, data Anda berhasil di Update"); document.location="index_lihat.php";</script>';
    }
}

?>
        
	</div>

</body>

</html>