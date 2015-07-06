<?php
	if(!isset($_SESSON)){
	    session_start();
	    if($_SESSION['status'] != 1){
	    	header("Location: http://relatorio.auditmais.com.br");
	    }
	}
?>