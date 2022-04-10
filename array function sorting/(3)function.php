<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$nama = array("Irma Mustafidah","Muttaqiyatul Azizah","Arini Hidayah","Dimas Ismail","Rara Anwar","Husnul Mubaroq","Nurun Dece","Hasib Aslamy","Hasan Hamdi","Sufiyatun Nisa","Ali Murtadlo","Iqbal Izza","Ananda Irvan","Ridhotul Maulidia","Jauza Audy","Aulia Anisa","Puji Rahayu","Kresna Yudha","Bayu Pratama","Moh Akbar","Yanuar Andi","Farra Amanda","Nefira Fachreza","Choirudin Asyari","Okky Rohman","Shelma Imara","Mela Atus","Sefti Ayu","Shaffa Salsa","Helmi Jauhari");asort($nama);
$dosen = array("Bintang Afid");
$kelas=array("D4-A","D4-B" );
$nilai= array("A");
$aktif = array("HIMTI");
function Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <15 ; $i++) {
	echo "<p>user $nrp[$i]<p>";	
	echo "<p>nama Lengkap :	$nama[$i]<p>";
	echo "<p>nama Kelas	: $kelas[0]<p>";
	echo "<p>nama Dosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>organisasi aktif :	$aktif[0]  <p>";
	echo "<hr>";


}
for ($q=15; $q <30 ; $q++) {
	echo "<p>user $nrp[$q]<p>";	
	echo "<p>nama Lengkap :	$nama[$q]<p>";
	echo "<p>nama Kelas	: $kelas[1]<p>";
	echo "<p>nama Dosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>organisasi aktif :	$aktif[0]  <p>";
	echo "<hr>";


}
	
}
Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif);


 ?>

