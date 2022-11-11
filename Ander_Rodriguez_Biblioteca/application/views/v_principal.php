
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
                            $idLibro = $libro->idlibro;
                            $titulo = $libro->titulo;
                            $nombre = $libro->nombre;
                            echo "<tr>
                                    <td>
                                    <input type='checkbox' name='chkLibros[]' value='$idLibro'>
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
                        echo "<tr><td colspan='3'><input type='submit' name='prestar' value='Prestar Libros'/></td></tr>";
                        echo "</table></form>";
                    }
                ?>
                

               

