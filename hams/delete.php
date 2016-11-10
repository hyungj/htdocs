<?php
require_once 'inc/header.php';
$db_host="localhost";
$db_name="test1";
$db_type="mysql";
$dsn="$db_type:host=$db_host;dbname=$db_name;charset=utf8";
$db_user="root";
$db_pass="";
try{
    $pdo=new PDO($dsn,$db_user,$db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print "";}
    catch(PDOException $Exception){
        die('오류'.$Exception->getMessage());
    
}
if(isset($_GET['idx'])){
    $idx=$_GET['idx'];
}

$sql = "delete from bor where idx=:idx";
$stmh = $pdo->prepare($sql);
$stmh->bindValue(":idx",$idx);
$stmh->execute();

header ("location:sub1.php");
?>