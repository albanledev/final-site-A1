<?php
require '../database/connect.php';
$data = [
    "formSupp" => $_POST['supp']
];

$delete = $database->prepare("DELETE FROM articles WHERE articles_id = :formSupp");

if ($delete->execute($data)){
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit;
}else{
    echo "Une erreur est survenue";
}