<?php 
    if(isset($_GET['p'])){
        $pagina = $_GET['p'];

        if($pagina == "home")
            include('CONTENT/PAGES/home.php');
        else if($pagina == "formacao")
            include('CONTENT/PAGES/formation.php');
        else if($pagina == "programacao")
            include('CONTENT/PAGES/programacao.php');
        else if($pagina == "outrosproj")
            include('CONTENT/PAGES/otherProjects.php');
        else if($pagina == "curriculo")
            include('CONTENT/PAGES/curriculo.php');
        else if($pagina == "projetos")
            include('CONTENT/PAGES/projetos.php');  
        else if($pagina == "contacto")
            include('CONTENT/PAGES/contacto.php');
        else
            include('CONTENT/PAGES/404.php');
    }else{
        include('CONTENT/PAGES/home.php');
    }
?>