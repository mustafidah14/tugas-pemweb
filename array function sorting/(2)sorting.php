<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$namaasc = array("Irma Mustafidah","Muttaqiyatul Azizah","Arini Hidayah","Dimas Ismail","Rara Anwar","Husnul Mubaroq","Nurun Dece","Hasib Aslamy","Hasan Hamdi","Sufiyatun Nisa","Ali Murtadlo","Iqbal Izza","Ananda Irvan","Ridhotul Maulidia","Jauza Audy","Aulia Anisa","Puji Rahayu","Kresna Yudha","Bayu Pratama","Moh Akbar","Yanuar Andi","Farra Amanda","Nefira Fachreza","Choirudin Asyari","Okky Rohman","Shelma Imara","Mela Atus","Sefti Ayu","Shaffa Salsa","Helmi Jauhari"); asort($namaasc);

$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$namadesc= array("Irma Mustafidah","Muttaqiyatul Azizah","Arini Hidayah","Dimas Ismail","Rara Anwar","Husnul Mubaroq","Nurun Dece","Hasib Aslamy","Hasan Hamdi","Sufiyatun Nisa","Ali Murtadlo","Iqbal Izza","Ananda Irvan","Ridhotul Maulidia","Jauza Audy","Aulia Anisa","Puji Rahayu","Kresna Yudha","Bayu Pratama","Moh Akbar","Yanuar Andi","Farra Amanda","Nefira Fachreza","Choirudin Asyari","Okky Rohman","Shelma Imara","Mela Atus","Sefti Ayu","Shaffa Salsa","Helmi Jauhari"); rsort($namadesc);

echo "<p>_________________________________________ASC_______________________________________________<p>";


function dataMhsasc($nrpasc,$namaasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP $nrpasc[$i]<p>";
	echo "<p>Nama $namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$namaasc);
echo "<p>_________________________________________DESC_______________________________________________<p>";

function dataMhsDesc($nrpdesc,$namadesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP $nrpdesc[$i]<p>";
	echo "<p>Nama $namadesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc,$namadesc);

 ?>