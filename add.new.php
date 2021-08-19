<?php
require_once 'functions.php';
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $title = $_POST['title'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
    $category = $_POST['category'];

    $sql = "INSERT INTO oglasi VALUES (NULL,'$title','$opis','$category','$cena','$id')";
    $query = mysqli_query(db(), $sql);

    if ($query) {
        header("Location:user.view.php");
    } else {
        header("Location:index.php");
    }
} else {
    header('Location:index.php');
}
