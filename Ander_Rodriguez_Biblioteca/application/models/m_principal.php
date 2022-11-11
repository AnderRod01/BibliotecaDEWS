<?php

    class M_principal extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        function getGeneros(){
            $query = "SELECT DISTINCT genero FROM libros";
            $rs = $this->db->query($query);

            return $rs->result();

        }

        function getLibrosPorGenero($genero){
            $query = "SELECT idlibro, titulo, nombre from libros, autores where libros.idautor = autores.idautor and libros.genero = '$genero'";
            $rs = $this->db->query($query);

            return $rs->result();
        }

        
        function contarPrestamos ($idLibro){
            $query = "SELECT * from PRESTAMOS where idlibro = '$idLibro'";
            $rs = $this->db->query($query);

            return $rs->num_rows();
        }
        
        function aniadirPrestamos ($libros){
            $fecha = date('Y-m-d');

            foreach($libros as $idLibro){
                $query = "INSERT INTO prestamos (fecha, idlibro) VALUES ('$fecha', '$idLibro')";
                $result= $this->db->query($query);

            }

        }


        function getTituloLibro ($idLibro){
            $query ="SELECT titulo from libros where idlibro= '$idLibro'";
            $rs = $this->db->query($query);

            return $rs->result();
        }
    }