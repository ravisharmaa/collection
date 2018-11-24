<?php
require_once 'vendor/autoload.php';
use App\Collection;

$db = new PDO('mysql:host=localhost;dbname=collection', 'root', '');

$a  = $db->query('select * from articles');

$a = $a->fetchAll(PDO::FETCH_OBJ);

$articles = new Collection($a);

$articles  = $articles->filter(function ($article) {
    return $article->post = $article->post." ravi";
})->last();

//$articles = $articles->map(function ($article){
//    return $article->id+1;
//});

var_dump($articles);
