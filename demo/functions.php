<?php 

function dd($value) {
    echo "<pre>";
    var_dump($value); // var dump php de bulunan global parametrelere erişebildiğimiz metod
    echo "</pre>";

    die(); // bundan sonrası execute edilmez kod olsa bile çalıştırılmaz
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}