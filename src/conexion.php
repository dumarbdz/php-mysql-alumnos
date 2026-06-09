<?php
$conn = new PDO('sqlite:/tmp/miapp.sqlite');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec("CREATE TABLE IF NOT EXISTS alumnos (id INTEGER PRIMARY KEY AUTOINCREMENT, nombre TEXT NOT NULL, email TEXT NOT NULL)");
$count = $conn->query("SELECT COUNT(*) FROM alumnos")->fetchColumn();
if ($count == 0) {
    $conn->exec("INSERT INTO alumnos (nombre, email) VALUES ('Ana Lopez', 'ana@example.com'), ('Luis Garcia', 'luis@example.com'), ('Marta Ruiz', 'marta@example.com')");
}
?>