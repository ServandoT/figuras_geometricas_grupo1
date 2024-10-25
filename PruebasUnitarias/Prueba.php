<?php
// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '/../src/FiguraGeometrica.php';
require_once __DIR__ . '/../src/Triangulo.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($expected, $actual, $testName) {
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias simples para la clase Triangulo

// Test 1: Prueba el cálculo del área de un Triangulo
$triangulo = new Triangulo("Triangulo de prueba", 5, 5, 5, 5, 5, 5);
$expectedArea = 5 * 5 / 2;
$actualArea = $triangulo->area();
assertEquals($expectedArea, $actualArea, "Prueba del cálculo del área");

// Test 2: Prueba el cálculo del perímetro de un Triangulo
$expectedPerimetro = $this->lado1 + $this->lado2 + $this->lado3;
$actualPerimetro = $triangulo->perimetro();
assertEquals($expectedPerimetro, $actualPerimetro, "Prueba del cálculo del perímetro");

// Test 3: Prueba si se retorna correctamente el nombre del triangulo
$expectedNombre = "Triangulo de prueba";
$actualNombre = $triangulo->getNombre();
assertEquals($expectedNombre, $actualNombre, "Prueba de obtención del nombre");
//
?>