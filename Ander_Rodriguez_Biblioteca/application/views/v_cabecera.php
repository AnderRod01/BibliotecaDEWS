<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BIBLIOTECA</title>
        <link rel="stylesheet" href="css/style.css"/>
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
                        foreach($generos as $genero){
                            echo "<li><a href=''>".$genero->genero."</a></li>";
                        }
                    ?>
                </ul>
            </div>
            <div id="main">

