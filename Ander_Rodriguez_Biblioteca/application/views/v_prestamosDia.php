<?php
    // var_dump($listaLibros);
    if (count($listaLibros)>0){
        
        echo "<h1>Prestamos Realizados</h1><ul>";
        foreach($listaLibros as $libro){
            $titulo = $libro->titulo;
            echo "<li>".$titulo."</li>";
        }

    }else{
        echo "<p>No se han realizado prestamos este día</p>";
    }

?>