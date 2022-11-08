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
    }