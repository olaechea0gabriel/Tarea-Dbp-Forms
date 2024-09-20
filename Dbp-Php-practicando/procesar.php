<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre y Apellidos: " . htmlspecialchars($_POST["nombre"]) . "<br>";
    echo "Fecha de Nacimiento: " . htmlspecialchars($_POST["fecha_nacimiento"]) . "<br>";
    echo "Ocupación: " . htmlspecialchars($_POST["ocupacion"]) . "<br>";
    echo "Contacto: " . htmlspecialchars($_POST["contacto"]) . "<br>";
    echo "Nacionalidad: " . htmlspecialchars($_POST["nacionalidad"]) . "<br>";
    

    if (isset($_POST["nivel_ingles"])) {
        echo "Nivel de inglés: " . htmlspecialchars($_POST["nivel_ingles"]) . "<br>";
    }
    
    if (!empty($_POST["lenguajes"])) {
        echo "Lenguajes de programación: " . implode(", ", $_POST["lenguajes"]) . "<br>";
    }
    
    echo "Aptitudes: " . htmlspecialchars($_POST["aptitudes"]) . "<br>";
    

    if (!empty($_POST["habilidades"])) {
        echo "Habilidades: " . implode(", ", $_POST["habilidades"]) . "<br>";
    }
    
    echo "Perfil: " . htmlspecialchars($_POST["perfil"]) . "<br>";
}
?>
