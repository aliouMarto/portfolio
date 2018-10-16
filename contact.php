<?php

 $bdd=new PDO('mysql:host=db757847670.db.1and1.com;dbname=db757847670;charset=utf8','dbo757847670','Ad669727405@');

if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND trim($_POST['nom']) AND trim($_POST['email']) AND trim($_POST['message']))
{
    $req=$bdd->prepare("INSERT INTO contact(nom,email,message) VALUES(?,?,?)");
    $req->execute(array($_POST['nom'],$_POST['email'],$_POST['message']));
}
header('Location: index.html');

?>


