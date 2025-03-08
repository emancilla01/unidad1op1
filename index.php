<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Practico</title>
</head>
<body>
    <header>
        <h1>Examen Practico Unidad 1 de Pro Web</h1>
</header>
    <div>
        <ul>
            <li><a href="#" onclick="ver('imagenes.html')">Imagenes de HTML, CSS Y JavaScript</a></li>
            <li><a href="index.php?opcion=Multimedia" >Multimedia</a></li>
            <li><a href="temario.html" target="contenedor2">Temario de Pro Web</a></li>
        </ul>
    </div>
    <div id="contenedor1">
    
    <?php
        if (!isset($_REQUEST['opcion']) || $_REQUEST['opcion'] !== "Multimedia") {
            echo '<p>
                Desarrollar una serie de páginas web (Minisitio Web) aplicando las diferentes lenguajes(HTML, 
                JavaScript, PHP), tecnologías y herramientas necesarias para el desarrollo de una Web App. 
                El minisitio web se desarrollará de forma local utilizando el editor de código Visual Studio Code, 
                la herramienta HERD para preparar el servidor web y que reconozca el lenguaje de programación PHP. 
                Para la ejecución del minisitio web utilizar un navegador como Windows Edge o algún otro;
                Para solicitar recursos del servidor web con el protocolo HTTP ó HTTPS; Estos recursos serán:
                Páginas Web estructuradas con HTML y sus diferentes elementos para incrustar recursos en HTML como 
                imágenes, texto, archivos PDF, Videos, Audios, Objetos (MS Word, Ms Excel, Ms PowerPoint, Etc.) 
            </p>';
        }

        if (isset($_REQUEST['opcion']) && $_REQUEST['opcion'] == "Multimedia") {
            include "multimedia.html";
        }
        ?>
        <iframe name="contenedor2" width="100%" height="600px" frameborder="0"></iframe>
    </div>
    <footer>
        <p>Ezequiel Mancilla Martinez           22430208</p>
    </footer>
</body>
<script>
    function ver(url) {
        div1 = document.querySelector("#contenedor1");
        fetch (url)
            .then (response => response.text())
            .then (data => {div1.innerHTML = data });
    }
</script>
</html>