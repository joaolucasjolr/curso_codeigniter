<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();  

    }
	public function index()
	{       
        

        //Dados a serem enviados para o cabeçalho // 
        $dados ['titulo'] = 'Painel de controle';
        $dados ['subtitulo'] = 'Home';

        $this->load->view('backend/template/html-header');
		$this->load->view('backend/template/template');
        $this->load->view('backend/home');
        $this->load->view('backend/template/html-footer');
	}
  
}
