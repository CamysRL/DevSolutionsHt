<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        die("Você não pode acessar essa pagina porque não está logado.<p><a href=\"../login.html\">Entrar</a></p>");
    }
?>