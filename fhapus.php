<?php
include("config.php");
$id = $_GET['id'];
$sql= $conn->query("DELETE FROM data_fklim WHERE id_datafklim=$id");
if($conn){
	echo"berhasil";

}else{
	echo"eror";
}
header("Location: fklim.php");


?>