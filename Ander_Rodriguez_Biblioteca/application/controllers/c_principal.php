<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_principal extends CI_controller{

        function __construct (){
            parent::__construct();
            $this->load->model('M_principal');
        }

        function index (){
            $this->getGeneros();
            $this->load->view('v_footer');
        }

        function getGeneros(){
            $data['listaGeneros'] = $this->M_principal->getGeneros();
            $data['listaLibros'] = array();
            $this->load->view('v_principal', $data);
        }

        function getLibrosPorGenero($genero){
            $data['listaGeneros'] = $this->M_principal->getGeneros();
            $data['listaLibros'] = $this->M_principal->getLibrosPorGenero($genero);
            $this->load->view('v_principal', $data);
            $this->load->view('v_footer');
        }

    }