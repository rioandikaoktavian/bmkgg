<?php
include("config.php");
$id = $_GET['id'];
$sql= $conn->query("DELETE FROM data_hujan WHERE id=$id");
if($conn){
	echo"berhasil";
	header('Location: detail.php');


}else{
	echo"eror";
}



?>
