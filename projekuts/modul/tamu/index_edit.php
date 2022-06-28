<?php include("koneksi.php");
echo "
<html>
<head>
<tittle></tittle>
<LINK REL=\"stylesheet\" TYPE=\"text/css\" HREF=\"style.css\">
</head>
<table border=0 width=860 align=center class=table_utama cellpading=0 cellspacing=0>
<tr height=100><td colspan=2 class=td_head><img src=admin/gambar/header.png></td></tr>
<tr><td colspan=2 bgcolor=#A1BBE4><marquee>Selamat datang di web site resmi Kelompok Gak Jelas Pemrograman Web 2</marquee></td></tr>
<tr height=400 valign=top><td class=td_menu>";

include("C:/xampp/htdocs/projekuts/modul/tamu/tampil_edit.php");


echo "</td></tr>
<tr ><td colspan=2 class=td_foot height=50>STMIK Amik Riau<br>Jalan Purwodadi Sidomulyo Barat<br>&copy; JMA Kelompok Gaje 2022</td></tr>
</table>
";
?>
