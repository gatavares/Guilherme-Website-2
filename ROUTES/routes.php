<?php 
    if(isset($_GET['p'])){
        $pagina = $_GET['p'];

        if($pagina == "home")
            include('CONTENT/PAGES/home.php');
        else
            include('CONTENT/PAGES/404.php');
    }else{
        include('CONTENT/PAGES/home.php');
    }
?>