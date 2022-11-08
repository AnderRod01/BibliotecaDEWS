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
            <div id="main">
                <?php
                    if (count ($listaLibros)>0){
                        echo "<form action='' method='post'>";

                        echo "<table><tr>
                            <th></th>
                            <th>Libro</th>
                            <th>Autor</th>
                        </tr>";
                        foreach($listaLibros as $libro){
                            $idLibro = $libro['idlibro'];
                            $titulo = $libro['titulo'];
                            $nombre = $libro['nombre'];
                            echo "<tr>
                                    <td>
                                    <input type='checkbox' name='chkLibro' value='$idLibro'>
                                    </td>
                                    <td>
                                        $titulo
                                    </td>
                                    <td>
                                        $nombre
                                    </td>
                                </tr>
                                ";
                        }

                        echo "</table></form>";
                    }
                ?>
                

               

