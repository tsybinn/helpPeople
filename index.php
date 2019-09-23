<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
include_once "class/User.class.php";
include_once "class/Db.class.php";

$user = new User;
$db  = new Db;

if (isset($_GET['linkMenu'])) {
    switch ($_GET['linkMenu']) {
        case "oFond":
            $title = "о Фонде";
            break;
        case "asHelp":
            $title = "как помочь";
            break;
        case "whomHelp":
            $title = "кому помочь";
            
            break;
        case "news":
            $title = "НОВОСТИ";
            
            break;
            case "meNeedHelp":
            $title = "получить помощь";
            break;
            case "helped":
            $title = "Кому помогли";
            break;
    }
} else {

    if($_GET){
        $title = "404";
    } else {
        $title = "ДАРИМ ДОБРО";
       
    }
    
}

include_once "elem/layout.php";
