<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Datos recibidos:</h2>";
    echo "<ul>";
    echo "<li><strong>Nombre:</strong> " . $_POST['nombre'] . "</li>";
    echo "<li><strong>Email:</strong> " . $_POST['email'] . "</li>";
    echo "<li><strong>Edad:</strong> " . $_POST['edad'] . "</li>";
    echo "<li><strong>Fecha de nacimiento:</strong> " . $_POST['fecha'] . "</li>";
    echo "<li><strong>Contraseña:</strong> " . $_POST['contrasena'] . "</li>";
    echo "<li><strong>Género:</strong> " . $_POST['genero'] . "</li>";

    echo "<li><strong>Intereses:</strong> ";
    if (isset($_POST['intereses'])) {
        echo implode(", ", $_POST['intereses']);
    } else {
        echo "Ninguno";
    }
    echo "</li>";

    echo "<li><strong>País:</strong> " . $_POST['pais'] . "</li>";
    echo "<li><strong>Comentario:</strong> " . $_POST['comentario'] . "</li>";



    echo "</ul>";
} else {
    echo "Acceso no permitido.";
}
