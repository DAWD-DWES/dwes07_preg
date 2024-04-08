<?php

echo '<h2>preg_match</h2>';

echo '<h3>Comprobar si una cadena contiene solo dígitos</h3>';
$texto = "123456";
$patron = "/^\d+$/";
if (preg_match($patron, $texto)) {
    echo "La cadena contiene solo dígitos.";
} else {
    echo "La cadena contiene caracteres no numéricos.";
}

echo '<h3>Cadena con letras y espacios en blanco</h3>';
$texto = 'John Doe';
$patron = '/^([a-zA-Z]+\s*)+$/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'El nombre es: ' . $coincidencias[1];
}

echo '<h3>Verificar si una cadena contiene una palabra específica</h3>';
$texto = "Hola, bienvenido al tutorial de PHP.";
$palabra = "tutorial";
$patron = "/$palabra/i";
if (preg_match($patron, $texto)) {
    echo "La palabra '$palabra' fue encontrada en el texto.";
} else {
    echo "La palabra '$palabra' no fue encontrada en el texto.";
}

echo '<h3>Correo electronico</h3>';
$texto = 'user@ejemplo.com';
$patron = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'La dirección de correo electrónico ' . $texto . ' es válida';
} else {
    echo 'La dirección de correo electrónico ' . $texto . ' es inválida';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Teléfono</h3>';
$texto = '+17 (555) 1235-4567';
$patron = '/^\+\d{1,2}\s\(\d{3}\)\s\d{4}-\d{4}$/';
if (preg_match($patron, $texto, $coincidencias,)) {
    echo 'El número de teléfono ' . $texto . ' es válido';
} else {
    echo 'El número de teléfono ' . $texto . ' es inválido';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Secciones del teléfono</h3>';
$texto = '+1 (555) 123-4567';
$patron = '/^\+(\d{1,3})\s\((\d{3})\)\s(\d{3}-\d{4})$/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'El código de país es: ' . $coincidencias[1] . ' y el número de teléfono es: ' . $coincidencias[2] . ' ' . $coincidencias[3];
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Extraer el nombre y la extensión de un archivo</h3>';
$texto = 'documento.pdf';
$patron = '/^([\w-]+)\.(\w+)$/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'El nombre del archivo es: ' . $coincidencias[1] . ' y su extensión es: ' . $coincidencias[2];
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Extraer campos de fecha</h3>';
$texto = 'La fecha de hoy es 20/03/2023';
$patron = '/(\d{2})\/(\d{2})\/(\d{4})/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'La fecha es: ' . $coincidencias[1] . '/' . $coincidencias[2] . '/' . $coincidencias[3];
} else {
    echo 'No se encontró una fecha en la cadena de texto';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Nombre de usuario y dominio de una dirección de correo</h3>';
$texto = 'user@example.com';
$patron = '/^([a-zA-Z0-9._-]+)@([a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'Nombre de usuario: ' . $coincidencias[1] . '<br>';
    echo 'Dominio: ' . $coincidencias[2];
} else {
    echo 'La dirección de correo electrónico es inválida';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Protocolo, dominio y ruta de una URL</h3>';
$texto = 'https://www.ejemplo.com/ejemplo/ruta';
$patron = '/^(\w+):\/\/([\w\.]+)\/(.*)$/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'El protocolo es: ' . $coincidencias[1] . ', el dominio es: ' . $coincidencias[2] . ' y la ruta es: ' . $coincidencias[3];
} else {
    echo 'la URL es inválida';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Dirección IP</h3>';
$texto = '192.168.0.1';
$patron = '/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
if (preg_match($patron, $texto, $coincidencias)) {
    echo 'La dirección IP ' . $texto . ' es válida';
} else {
    echo 'La dirección IP ' . $texto . ' es inválida';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Secciones de IP</h3>';
$patron = '/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
$texto = '192.168.1.15';
if (preg_match($patron, $texto, $coincidencias)) {
    echo "El primer octeto es: " . $coincidencias[1] . "\n";
    echo "El segundo octeto es: " . $coincidencias[2] . "\n";
    echo "El tercer octeto es: " . $coincidencias[3] . "\n";
    echo "El cuarto octeto es: " . $coincidencias[4] . "\n";
} else {
    echo "La dirección IP no es válida.";
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>flags</h3>';
$texto = 'foobarbaz';
$patron = '/(foo)(bar)(baz)/';
preg_match($patron, $texto, $coincidencias, PREG_OFFSET_CAPTURE);
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h2>preg_match_all</h2>';

echo '<h3>Vocales</h3>';
$texto = 'La lluvia en Sevilla es una maravilla';
$patron = '/[aeiou]/';
if (preg_match_all($patron, $texto, $coincidencias)) {
    echo 'Se encontraron las siguientes vocales: ' . implode(', ', $coincidencias[0]);
} else {
    echo 'No se encontraron vocales';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Grupos de dos o más Vocales</h3>';
$texto = 'miau abuelo';
$patron = '/[aeiou]{2,}/';
echo preg_match_all($patron, $texto, $coincidencias);
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena que contiene comas como separadores:</h3>';
$texto = 'rojo,verde,azul,amarillo';
$patron = '/(\w+),?/';
preg_match_all($patron, $texto, $coincidencias, PREG_SET_ORDER);
foreach ($coincidencias as $coincidencia) {
    echo $coincidencia[1] . '<br>';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena:</h3>';
$texto = 'John Smith, 25 años Peter Floyd, 34 años';
$patron = '/(\w+)\s(\w+),\s(\d+)\s(años)/';
preg_match_all($patron, $texto, $coincidencias, PREG_SET_ORDER);
foreach ($coincidencias as $coincidencia) {
    echo 'Nombre: ' . $coincidencia[1] . ' ' . $coincidencia[2] . ', Edad: ' . $coincidencia[3] . ' ' . $coincidencia[4] . '<br>';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena:</h3>';
$texto = 'John Smith, 25 años Peter Floyd, 34 años';
$patron = '/(\w+)\s(\w+),\s(\d+)\s(años)/';
preg_match_all($patron, $texto, $coincidencias, PREG_PATTERN_ORDER);
echo 'Nombres: ' . $coincidencias[1][0] . ' ' . $coincidencias[1][1] . '</br>';
echo 'Edades: ', $coincidencias[3][0] . ' ' . $coincidencias[3][1] . '</br>';
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena con nombres de subpatrones:</h3>';
$texto = 'John Smith, 25 años';
$patron = '/(?P<nombre>\w+)\s(?P<apellido>\w+),\s(?P<edad>\d+)\s(años)/';
preg_match_all($patron, $texto, $coincidencias, PREG_SET_ORDER);
foreach ($coincidencias as $coincidencia) {
    echo 'Nombre: ' . $coincidencia['nombre'] . ' ' . $coincidencia['apellido'] . ', Edad: ' . $coincidencia['edad'] . ' años<br>';
}
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h3>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena con nombres de subpatrones:</h3>';
$texto = <<<FOO
a: 1
b: 2
c: 3
FOO;
$patron = '/(?P<nombre>\w+): (?P<digito>\d+)/';

preg_match_all($patron, $texto, $coincidencias);
echo '</br>';
echo "<pre>";
print_r($coincidencias);
echo "<pre>";

echo '<h2>preg_replace</h2>';

echo '<h3>Eliminar todos los números de una cadena</h3>';
$texto = 'La contraseña es 1234-ABCD-5678';
$patron = '/[0-9]/';
$sustitucion = '';

echo preg_replace($patron, $sustitucion, $texto);

echo '<h3>Reemplazar todas las ocurrencias de una palabra en una cadena con otra palabra:</h3>';
$texto = 'La lluvia en Sevilla es una maravilla';
$patron = '/Sevilla/';
$sustitucion = 'Madrid';
echo $texto;
echo '</br>';
echo preg_replace($patron, $sustitucion, $texto);

echo '<h3>Formatear Teléfono</h3>';
$texto = 'Mis números de contacto son 1234567890, 123 456 7890 y (123)456-7890.';
$patron = '/(\d{3})[ -]?(\d{3})[ -]?(\d{4})/';
$sustitucion = '($1) $2-$3';
echo $texto;
echo '</br>';
echo preg_replace($patron, $sustitucion, $texto);

echo '<h3>Eliminar HTML tags de una cadena</h3>';
$texto = '<p>Este es un <strong>ejemplo</strong> de texto con <a href="#">enlaces</a>.</p>';
$patron = '/<[^>]*>/';
$sustitucion = '';
echo $texto;
echo '</br>';
echo preg_replace($patron, $sustitucion, $texto);

echo '<h3>Reemplazar espacios por guiones</h3>';
$texto = 'Este es un texto de ejemplo para     URL';
$patron = '/\s+/';
$sustitucion = '-';
echo $texto;
echo '</br>';
echo preg_replace($patron, $sustitucion, $texto);

echo '<h3>Capitalizar la primera letra de cada palabra</h3>';
$texto = 'este es un texto de ejemplo';
$patron = '/\b(\w)/';
echo $texto;
echo '</br>';
echo preg_replace_callback($patron, function ($coincidencias) {
    return strtoupper($coincidencias[1]);
}, $texto);

echo '</br>';
echo '<h3>Ocultar parte de una dirección de correo electrónico</h3>';
$texto = 'correo@example.com';
$patron = '/(^.{2}).*(@.*?).{2}$/';
$sustitucion = '$1***$2***';
echo $texto;
echo '</br>';
echo preg_replace($patron, $sustitucion, $texto);

echo '</br>';
echo '<h3>Eliminar primera y última letra</h3>';
$texto = 'Esta es una cadena de ejemplo';
$patron = '/\b\w(\w*)\w\b/';
$sustitucion = '$1';
echo $texto;
echo '</br>';
echo preg_replace($patron, $sustitucion, $texto);

echo '<h3>Remplazar los espacios en una cadena por guiones bajos:</h3>';
$texto = ['Esta es una cadena con espacios', 'Estaesunacadenasinespacions'];
$patron = '/\s/';
$sustitucion = '_';
echo '<pre>';
print_r($texto);
echo '<pre>';
echo '</br>';
echo '<pre>';
print_r(preg_replace($patron, $sustitucion, $texto));
echo '<pre>';

echo '<h2>preg_filter</h2>';
echo '<h3>Remplazar y filtrar los espacios en una cadena por guiones bajos:</h3>';
$texto = ['Esta es una cadena con espacios', 'Estaesunacadenasinespacions'];
$patron = '/\s/';
$sustitucion = '_';
echo '<pre>';
print_r($texto);
echo '<pre>';
echo '</br>';
echo '<pre>';
print_r(preg_filter($patron, $sustitucion, $texto));
echo '<pre>';

echo '<h3>Diferencia entre filter y replace</h3>';
$texto = array('1', 'a', '2', 'b', '3', 'A', 'B', '4');
$patron = array('/\d/', '/[a-z]/', '/[1a]/');
$sustitucion = array('A:$0', 'B:$0', 'C:$0');
echo '<pre>';
print_r($texto);
echo '<pre>';
echo 'preg_filter devuelve: <br>';
echo '<pre>';
print_r(preg_filter($patron, $sustitucion, $texto));
echo '<pre>';
echo 'preg_replace devuelve: <br>';
echo '<pre>';
print_r(preg_replace($patron, $sustitucion, $texto));
echo '<pre>';

echo '<h2>preg_split</h2>';
echo '<h3>Dividir una cadena en palabras separadas por espacios:</h3>';
$texto = 'Esto es una cadena            de prueba';
echo '<pre>';
print_r(preg_split('/\s+/', $texto));
echo '<pre>';

echo '<h3>Dividir una cadena en partes separadas por comas o punto y coma:</h3>';
$texto = 'Manzanas, naranjas, plátanos; peras; kiwis, mangos';
$patron = '/[,;]\s*/';
echo '<pre>';
print_r(preg_split($patron, $texto));
echo '<pre>';

echo '<h3>Dividir una cadena en partes que contienen números solamente:</h3>';
$texto = 'abc123def456ghi789jkl';
$patron = '/\D+/';
echo '<pre>';
print_r(preg_split($patron, $texto));
echo '<pre>';

echo '<h3>Dividir una cadena en partes que contienen números solamente:</h3>';
$texto = 'abc123def456ghi789jkl';
$patron = '/\D+/';
echo '<pre>';
print_r(preg_split($patron, $texto, -1, PREG_SPLIT_NO_EMPTY));
echo '<pre>';

echo '<h3>Dividir una cadena en partes que contienen números solamente:</h3>';
$texto = 'abc123def456ghi789jkl';
$patron = '/\D+/';
echo '<pre>';
print_r(preg_split($patron, $texto, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_OFFSET_CAPTURE));
echo '<pre>';
