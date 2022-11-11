<?php
    if (isset($_POST['prestar'])){
        
        if(count($librosPrestados) > 0){
            echo "<h2>LIBROS PRESTADOS</h2><ul>";
            foreach($librosPrestados as $libro){
                $titulo = $libro->titulo;
                echo "<li>".$titulo."</li>";
                
            }
            echo "</ul>";
        }

        if(count($librosNoPrestados) > 0){
            echo "<h2>LIBROS NO PRESTADOS</h2><ul>";
            foreach($librosNoPrestados as $libro){
                $titulo = $libro->titulo;
                echo "<li>".$titulo."</li>";
                
            }
            echo "</ul>";
        }
    }
?>