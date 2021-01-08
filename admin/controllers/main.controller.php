<?php 
class controller{
        //DATA

    //LOGIQUE
    function __construct()
    {
        $url = $_SERVER["REQUEST_URI"];
//echo $url;

// on décortique

    $url = explode('/', $url);
        if($url[2] == "admin"){
            if($url[3] == "login" && !isset($url[4])){
                include_once 'views/forms/form.login.php';
            }
            else if($url[3] == "modifier_article"){
                if (isset($url[4])){
                    include_once "views/forms/form.modify.article.php";
                }
                else{header("location:./");}
                
            }
            else if($url[3] == "modifier_site"){
                    include_once "views/forms/form.modify.site.php";
            }
            else if($url[3] == "ajouter_article" && !isset($url[4])){
                include_once 'views/forms/form.add.article.php';
            }
            else{
                include_once 'views/main.view.php';
            }
            
        }
        else{
            header("location:../error");
        }
    }
}