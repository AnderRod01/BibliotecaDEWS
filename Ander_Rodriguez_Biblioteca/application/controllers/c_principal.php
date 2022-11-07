<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class c_principal extends CI_controller{

        function __construct (){
            parent::__construct();
            $this->load->model('m_principal');
        }

        function index (){
            $this->getGeneros();
            $this->load->view("v_footer");
        }

        function getGeneros(){
            $data['generos'] = $this->m_principal->getGeneros();
            $this->load->view('v_cabecera', $data);
        }

    }