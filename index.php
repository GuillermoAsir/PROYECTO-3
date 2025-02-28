<?php

require_once 'php/script/render.php';
require_once 'php/classes/ApiClient.php';
require_once 'php/templates/head.php';
require_once 'php/classes/PersonajeDragonBall.php'; // Incluye la clase
use App\PersonajeDragonBall;

// Instancia el cliente API para Dragon Ball
$apiClient2 = new ApiClient("https://dragonball-api.com/api/characters/");
$data2 = $apiClient2->fetchData();

// Convierte los datos API en instancias de PersonajeDragonBall
$characters = [];
foreach ($data2['items'] as $item) {
    $characters[] = new PersonajeDragonBall(
        $item['name'],
        $item['ki'],
        $item['maxKi'],
        $item['race'],
        $item['gender'],
        $item['description'],
        $item['image'],
        $item['affiliation']
    );
}

// Incluye la lógica de búsqueda aquí
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$filteredCharacters = array_filter($characters, function($character) use ($searchTerm) {
    return stripos($character->getName(), $searchTerm) !== false;
});

// Pasa los datos a la plantilla
include 'php/templates/body.php';
?>