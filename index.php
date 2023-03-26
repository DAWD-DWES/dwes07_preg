<?php

// Definir la cadena de entrada
$cadena = "Esta es una cadena de ejemplo";

// Aplicar la expresión regular y reemplazar las letras iniciales y finales
$nueva_cadena = preg_replace('/\b\w(\w*)\w\b/', '$1', $cadena);

// Imprimir la cadena resultante
echo $nueva_cadena;

echo "<h2>Preg_match</h2>";
echo "<h3>Correo electronico</h3>";
$email = 'user@examplo.com';
if (preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email, $matches)) {
    echo 'La dirección de correo electrónico ' . $email . ' es válida';
} else {
    echo 'La dirección de correo electrónico ' . $email . ' es inválida';
}


echo "</br>";
echo "<h3>Teléfono</h3>";
$phone = '+17 (555) 1235-4567';
if (preg_match('/^\+\d{1,2}\s\(\d{3}\)\s\d{3}-\d{4}$/', $phone, $matches, )) {
    echo 'El número de teléfono ' . $phone . ' es válido';
} else {
    echo 'El número de teléfono ' . $phone . ' es inválido';
}


echo "</br>";
echo "<h3>Teléfono</h3>";
$telefono = '+1 (555) 123-4567';
if (preg_match('/^\+(\d{1,3})\s\((\d{3})\)\s(\d{3}-\d{4})$/', $telefono, $matches)) {
    echo 'El código de país es: ' . $matches[1] . ' y el número de teléfono es: ' . $matches[2] . ' ' . $matches[3];
}


echo "</br>";
echo "<h3>Dirección IP</h3>";
$ip = '192.168.0.1';
if (preg_match('/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/', $ip)) {
    echo 'La dirección IP ' . $ip . ' es válida';
} else {
    echo 'La dirección IP ' . $ip . ' es inválida';
}


echo "</br>";
echo "<h3>Nombre de usuario y dominio de una dirección de correo</h3>";
$email = 'user@example.com';
if (preg_match('/^([a-zA-Z0-9._-]+)@([a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/', $email, $matches)) {
    echo 'Nombre de usuario: ' . $matches[1] . '<br>';
    echo 'Dominio: ' . $matches[2];
} else {
    echo 'La dirección de correo electrónico es inválida';
}

echo "</br>";
echo "<h3>Extraer campos de fecha</h3>";
$text = 'La fecha de hoy es 20/03/2023';
if (preg_match('/(\d{2})\/(\d{2})\/(\d{4})/', $text, $matches)) {
    echo 'La fecha es: ' . $matches[1] . '/' . $matches[2] . '/' . $matches[3];
} else {
    echo 'No se encontró una fecha en la cadena de texto';
}

echo "</br>";
echo "<h3>Protocolo, dominio y ruta de una URL</h3>";
$url = 'https://www.ejemplo.com/ejemplo/ruta';
if (preg_match('/^(\w+):\/\/([\w\.]+)\/(.*)$/', $url, $matches)) {
    echo 'El protocolo es: ' . $matches[1] . ', el dominio es: ' . $matches[2] . ' y la ruta es: ' . $matches[3];
} else {
    echo 'la URL es inválida';
}


echo "</br>";
echo "<h3>Cadena con letras y espacios en blanco</h3>";
$nombre = 'John Doe';
if (preg_match('/^([a-zA-Z]+\s*)+$/', $nombre)) {
    echo 'El nombre es' . $nombre;
}


echo "</br>";
echo "<h3>Extraer el nombre y la extensión de un archivo</h3>";
$archivo = 'documento.pdf';
if (preg_match('/^([\w-]+)\.(\w+)$/', $archivo, $matches)) {
    echo 'El nombre del archivo es: ' . $matches[1] . ' y su extensión es: ' . $matches[2];
}


echo "<h2>Preg_filter</h2>";
echo "<h3>Eliminar todos los números de una cadena</h3>";
$text = 'La contraseña es 1234-ABCD-5678';
$text_without_numbers = preg_filter('/[0-9]/', '', $text);
echo 'La contraseña sin números es: ' . $text_without_numbers;


echo "</br>";
echo "<h3>Remplazar los espacios en una cadena por guiones bajos:</h3>";
$text = 'Esta es una cadena con espacios';
$text_with_underscores = preg_filter('/\s/', '_', $text);
echo 'La cadena con guiones bajos es: ' . $text_with_underscores;


echo "</br>";
echo "<h3>Eliminar todos los caracteres no alfanuméricos de una cadena:</h3>";
$text = 'La contraseña es 1234-ABCD-5678';
$text_without_special_chars = preg_filter('/[^a-zA-Z0-9]/', '', $text);
echo 'La contraseña sin caracteres especiales es: ' . $text_without_special_chars;
echo "</br>";


echo "<h3>Reemplazar todas las ocurrencias de una palabra en una cadena con otra palabra:</h3>";
$text = 'La lluvia en Sevilla es una maravilla';
$new_text = preg_filter('/Sevilla/', 'Madrid', $text);
echo 'El nuevo texto es: ' . $new_text;


echo "<h3>Diferencia entre filter y replace</h3>";
$sujeto = array('1', 'a', '2', 'b', '3', 'A', 'B', '4');
$patrón = array('/\d/', '/[a-z]/', '/[1a]/');
$sustitución = array('A:$0', 'B:$0', 'C:$0');

echo "preg_filter devuelve\n";
print_r(preg_filter($patrón, $sustitución, $sujeto));

echo "preg_replace devuelve\n";
print_r(preg_replace($patrón, $sustitución, $sujeto));


echo "<h2>Preg_match_all</h2>";
echo "<h3>Vocales</h3>";
$text = 'La lluvia en Sevilla es una maravilla';
if (preg_match_all('/[aeiou]/', $text, $matches)) {
    echo 'Se encontraron las siguientes vocales: ' . implode(', ', $matches[0]);
} else {
    echo 'No se encontraron vocales';
}


echo "</br>";
echo "<h3>Vocales</h3>";
if (preg_match_all('/([aeiou])/', $text, $matches)) {
    echo 'Se encontraron las siguientes vocales: ' . implode(', ', $matches[1]);
} else {
    echo 'No se encontraron vocales';
}


echo "</br>";
echo "<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena:</h3>";
$text = 'John Smith, 25 años Peter Floyd, 34 años';
preg_match_all('/(\w+)\s(\w+),\s(\d+)\s(años)/', $text, $matches, PREG_SET_ORDER);
foreach ($matches as $match) {
    echo 'Nombre: ' . $match[1] . ' ' . $match[2] . ', Edad: ' . $match[3] . ' ' . $match[4] . '<br>';
}


echo "</br>";
echo "<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena con nombres de subpatrones:</h3>";
$text = 'John Smith, 25 años';
preg_match_all('/(?P<nombre>\w+)\s(?P<apellido>\w+),\s(?P<edad>\d+)\s(años)/', $text, $matches, PREG_SET_ORDER);
foreach ($matches as $match) {
    echo 'Nombre: ' . $match['nombre'] . ' ' . $match['apellido'] . ', Edad: ' . $match['edad'] . ' años<br>';
}
echo "</br>";
echo "<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena que contiene comas como separadores:</h3>";
$text = 'rojo,verde,azul,amarillo';
preg_match_all('/(\w+),?/', $text, $matches, PREG_SET_ORDER);
foreach ($matches as $match) {
    echo $match[1] . '<br>';
}

echo "<h2>Preg_filter</h2>";
echo "<h3>Dividir una cadena en palabras        separadas por espacios:</h3>";
$text = 'Esto es una cadena            de prueba';
$words = preg_split('/\s+/', $text);
print_r($words);

echo "</br>";
echo "<h3>Dividir una cadena en partes separadas por comas o punto y coma:</h3>";
$text = 'Manzanas, naranjas, plátanos; peras; kiwis, mangos';
$fruits = preg_split('/[,;]\s*/', $text);
print_r($fruits);

echo "</br>";
echo "<h3>Dividir una cadena en partes que contienen números solamente:</h3>";
$text = 'abc123def456ghi789jkl';
$parts = preg_split('/\D+/', $text);
print_r($parts);

echo "</br>";
echo "<h3>Dividir una cadena en partes que contienen números solamente:</h3>";
$text = 'abc123def456ghi789jkl';
$part2 = preg_split('/\D+/', $text, -1, PREG_SPLIT_OFFSET_CAPTURE);
print_r($parts2);


