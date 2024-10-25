<?php
// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '/../src/Punto.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($expected, $actual, $testName)
{
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Test de la distancia entre dos puntos
$punto_1 = new Punto(0,0);
$punto_2 = new Punto(0,1);
$distanciaEsperada = 1;
$distanciaCalculada = $punto_1->distancia($punto_2);
assertEquals($distanciaEsperada, $distanciaCalculada,"Prueba de distancia entre dos puntos");