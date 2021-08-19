<?php
require_once 'config.php';
session_start();

// kreirame finkcija za konekcija so bazata
function db()
{
    $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die('Connection error');
    return $con;
}

// kreiram pomosna funkcija za testiranje 
function dd($val)
{
    echo "<pre>";
    die(var_dump($val));
    echo "</pre";
}

// kreirame funkcija za logiranje
function logUser($user)
{
    session_start();
    $_SESSION['id'] = $user['user_id'];
    $_SESSION['name'] = $user['name'];
    header("Location:oglasi.php");
}

// kreiraj funkcija mkoja ke zema se od bazata od tabela oglasi
function getAll()
{
    $sql = "SELECT oglasi.oglas_id,oglasi.title,oglasi.opis,oglasi.category,oglasi.cena,oglasi.user_id,users.name FROM oglasi INNER JOIN users ON oglasi.user_id = users.user_id";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

// kreiraj funkcija za filtriranje oglasi po user_id
function get_user_all($id)
{
    $sql = "SELECT *,users.name FROM oglasi INNER JOIN users ON oglasi.user_id = users.user_id WHERE oglasi.user_id = '$id'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

// kreirame funkcija koja ke ni vrati eden ogls spored ID
function getOne($id)
{
    $sql = "SELECT *,users.name FROM oglasi INNER JOIN users ON oglasi.user_id = users.user_id WHERE oglasi.oglas_id = '$id'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}

// kreirame funkcija za categorii da mozi da se prikazuvaat samo
function getCategory($cat)
{
    $sql = "SELECT *,users.name FROM oglasi INNER JOIN users ON oglasi.user_id = users.user_id WHERE oglasi.category = '$cat'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
// kreirame funkcija za categorii da mozi da se prikazuvaat samo
function getAllUsers($name)
{
    $sql = "SELECT *,users.name FROM oglasi INNER JOIN users ON oglasi.user_id = users.user_id WHERE users.name = '$name'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
