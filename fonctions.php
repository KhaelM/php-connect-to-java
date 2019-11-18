<?php
function getAllFilieres()
{
    $url ="http://localhost:8080/myapp/myresource/filieres";
    // pass the java restful URL
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
    //curl_setopt($client,CURLOPT_POST,$data);
    $response = curl_exec($client);

    return $filieres = json_decode($response);
}

function getAllClasses()
{
    $url ="http://localhost:8080/myapp/myresource/classes";
    // pass the java restful URL
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
    //curl_setopt($client,CURLOPT_POST,$data);
    $response = curl_exec($client);

    return $filieres = json_decode($response);
}

function getMoyenneGenerale($filiere, $classe)
{
    $url ="http://localhost:8080/myapp/myresource/moyenne-general?filiere=".$filiere."&classe=".$classe;
    // pass the java restful URL
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
    //curl_setopt($client,CURLOPT_POST,$data);
    $response = curl_exec($client);

    return $response;
}

function getNombreAjourne($filiere, $classe)
{
    $url ="http://localhost:8080/myapp/myresource/nombre-ajourne?filiere=".$filiere."&classe=".$classe;
    // pass the java restful URL
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
    //curl_setopt($client,CURLOPT_POST,$data);
    $response = curl_exec($client);

    return $response;
}

function getNombreAdmis($filiere, $classe)
{
    $url ="http://localhost:8080/myapp/myresource/nombre-admis?filiere=".$filiere."&classe=".$classe;
    // pass the java restful URL
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
    //curl_setopt($client,CURLOPT_POST,$data);
    $response = curl_exec($client);

    return $response;
}