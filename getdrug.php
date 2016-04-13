<?php
session_start();
if(isset($_SESSION['getdrug'])){
	echo $_SESSION['getdrug'];
}
?>