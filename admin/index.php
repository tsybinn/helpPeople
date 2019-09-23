<?
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
session_start();
include_once "../class/User.class.php";
include_once "../class/Db.class.php";

$user = new User;
$db  = new Db;


if(isset($_GET['logOut'])){
    unset($_SESSION['auth']);
     header("Location: index.php");
}

if(isset($_GET['delete'])){
   include_once "elem/delete.php";
}

if(isset($_GET['delFoto'])){

   include_once "elem/deleteFoto.php";
}



include_once "elem/layout.php";




?>


