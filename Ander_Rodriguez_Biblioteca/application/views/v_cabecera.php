<?= $hojaestilos = base_url()."css/style.css"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BIBLIOTECA</title>
        <link rel="stylesheet" href="<?= $hojaestilos ?>" />
    </head>
    <style>
        img{
            width: 150px;
            object-fit:cover;
        }
    </style>
    <body>
        <div id="header">
            <h1>PRESTAMOS</h1>
        </div>
        <div id="container">
            <div id="bar">
                <ul>
                    <?php
                        foreach($listaGeneros as $genero){
                            $gen = $genero->genero;
                            echo "<li><a href='".base_url()."index.php/getLibrosPorGenero/$gen'>".$gen."</a></li>";
                        }
                    ?>
                </ul>
            </div>