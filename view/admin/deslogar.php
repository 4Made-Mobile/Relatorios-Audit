<?php
    session_start();
    if(isset($_SESSION)){
        unset($_SESSION['status']);
        unset($_SESSION);
        session_destroy();
        header("Location: http://relatorio.auditmais.com.br");
    }else{
        header("Location:  http://relatorio.auditmais.com.br");
    }
?>