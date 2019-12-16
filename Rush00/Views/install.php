<?php
$path = "../files/stock.csv";
$folder_path = "../files/";
$data = array();
$data[0] = "name,price,img,ID,categorie";
if(!$folder_path)
	mkdir($folder_path, 0755);
if (!file_exists($path)) 
	file_put_contents($path, $data);


$path2 = "../files/orders.csv";
$folder_path = "../files/";
$data2 = array();
$data2[0] = "id,login,time,price,item:quantity,...";
if(!$folder_path)
	mkdir($folder_path, 0755);
if (!file_exists($path2)) 
	file_put_contents($path2, $data2);


$path3 = "../private/passwd";
$folder_path = "../private/";
// $data = array();
$data3 = "a:1:{i:1;a:2:{s:5:\"login\";s:5:\"admin\";s:6:\"passwd\";s:64:\"8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918\";}}";
if(!$folder_path)
	mkdir($folder_path, 0755);
if (!file_exists($path3))	
	file_put_contents($path3, $data3);
?>