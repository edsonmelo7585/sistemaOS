<?php
class Clientes_Endereco extends CI_Controller {
	    function __construct() {
        parent::__construct();
            if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))){
            redirect('mapos/login');
            }
            $this->load->helper(array('codegen_helper'));
            $this->load->model('clientes_model','',TRUE);
            $this->data['menuClientes'] = 'clientes';
	}	
	

}