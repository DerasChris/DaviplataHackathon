<?php

$servername = "localhost";
$username = "root";
$password = "admin123."; // Cambia esto por tu contraseña
$dbname = "davivienda"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Usuarios de ejemplo para insertar
$usuarios = [
    ['carnet' => '2513872020', 'password' => '11122000', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872021', 'password' => '12011990', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872022', 'password' => '23051985', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872023', 'password' => '04101992', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872024', 'password' => '15081988', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872025', 'password' => '22022001', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872026', 'password' => '31031987', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872027', 'password' => '05072000', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872028', 'password' => '28021995', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872029', 'password' => '14041989', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872030', 'password' => '01111993', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872031', 'password' => '24061991', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872032', 'password' => '30121984', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872033', 'password' => '09081986', 'universidad' => 'Universidad Tecnológica'],
    ['carnet' => '2513872034', 'password' => '20111990', 'universidad' => 'Universidad Tecnológica'],
];


// Función para hashear la contraseña
function bcrypt($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Insertar usuarios
foreach ($usuarios as $usuario) {
    $hashedPassword = bcrypt($usuario['password']);
    $sql = "INSERT INTO usuarios_universidad (carnet, contrasena, universidad) VALUES ('{$usuario['carnet']}', '{$hashedPassword}', '{$usuario['universidad']}')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario '{$usuario['carnet']}' insertado correctamente.\n";
    } else {
        echo "Error insertando usuario '{$usuario['carnet']}': " . $conn->error . "\n";
    }
}

// Cerrar conexión
$conn->close();
?>