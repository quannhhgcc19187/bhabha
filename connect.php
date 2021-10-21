<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://ordsisfwyvenwi:ce17e91e2c56f6e04bfb1cd5d26e92d6aa9afa212847cb23eaf55dc71622ea13@ec2-52-0-93-3.compute-1.amazonaws.com:5432/df6eulf6tnsrso");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>
