<?php
include "../cabecera.php";
echo $titulo[6];
$hostname = "localhost";
$usuario = "root";
$password = "juanpaul29";
$nombreBD = "procedimiento_php";
//Crear conexión
$conn = mysqli_connect($hostname, $usuario, $password, $nombreBD);
//Verifica la conexión
if (!$conn) {
die("La conexión falló: " . mysqli_connect_error());
}
$sql = "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Boris Cristhian', 'Aro Chura', 'boris@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Claudia Marisol', 'Cachi Quispe', 'claudia@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Martin', 'Cachi Quispe', 'martin@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Jhessica',', 'Choque Condori', 'jhessica@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Erika Amanda', 'Condori Quispe', 'erika@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Joel', 'Flores Mamani', 'joel@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Yola', 'Huanca Noa', 'yola@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Juan Paul', 'Luque Lluta', 'juanpaul@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Rodrigo', 'Mamani Aruquipa', 'rodrigo@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Luz Natalia', 'Parada Mamani', 'luznatalia@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Juan Ronaldo', 'Quispe Mamani', 'juanronaldo@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Rosse Mary', 'Saucedo Aro', 'rosse@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Ever', 'Tallacagua Quispe', 'ever@example.com');";
if (mysqli_multi_query($conn, $sql)) { 
echo "Nuevos registros creados exitosamente";
} else {
echo "Error: ".$sql."<br>".mysqli_error($conn);
} 
mysqli_close($conn);
?>
