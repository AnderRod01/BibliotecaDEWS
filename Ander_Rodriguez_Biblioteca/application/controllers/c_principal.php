<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_principal extends CI_controller{

        function __construct (){
            parent::__construct();
            $this->load->model('M_principal');
        }

        function index (){
            $this->getGeneros();

            $this->load->library('calendar');

            $dias = array();
            for($i=0; $i<31; $i++){
                array_push($dias, "index.php/getPrestamosDia/".date('Y')."-".date('m')."-".$i);
            }

            $calendario['calendario'] = $this->calendar->generate(date('Y'), date('m'), $dias);
            $this->load->view('v_calendario', $calendario);
            $this->load->view('v_footer');
        }
        

        function getGeneros(){
            $data['listaGeneros'] = $this->M_principal->getGeneros();
            $data['listaLibros'] = array();
            $this->load->view('v_cabecera', $data);
        }

        function getLibrosPorGenero($genero){
            $data['listaGeneros'] = $this->M_principal->getGeneros();
            $data['listaLibros'] = $this->M_principal->getLibrosPorGenero($genero);
            $this->load->view('v_cabecera', $data);
            $this->load->view('v_principal',$data);


            
            $librosSeleccionados = $this->input->post('chkLibros');
            
            $data['librosPrestados'] = [];
            $data['librosNoPrestados'] = [];

            if (count($librosSeleccionados) > 0){
                
                foreach ($librosSeleccionados as $libro) {
                    $titulo = $this->M_principal->getTituloLibro($libro)[0];

                    if ($this->M_principal->contarPrestamos($libro) <= 4){

                        $this->M_principal->aniadirPrestamos($librosSeleccionados);
                        array_push($data['librosPrestados'], $titulo);

                    }else{
                        array_push($data['librosNoPrestados'], $titulo);
                    }
                }
                $this->load->view('v_prestamos', $data);
            }
            $this->load->view('v_footer');
        }


        function getPrestamosDia($fecha){
            $data['listaLibros'] = $this->M_principal->getPrestamosDia($fecha);
            $data['listaGeneros'] = $this->M_principal->getGeneros();


            $this->load->view('v_cabecera', $data);
            $this->load->view('v_prestamosDia', $data);
            $this->load->view('v_footer');
        }
    }