<?php

    class m_principal extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        function getGeneros(){
            $query = "SELECT DISTINCT genero FROM libros";
            $rs = $this->db->query($query);

            return $rs->result();

        }
    }