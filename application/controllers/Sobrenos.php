<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos extends CI_Controller {

	public function __construct(){
        parent::__construct();  

        $this->load->model('categorias_model','modelcategorias');
       $this->categorias = $this->modelcategorias->listar_categorias();
       $this->load->model('usuarios_model' ,'modelusuarios');

       

    }
	public function index()
	{       
        $dados['categorias'] = $this->categorias;

        $dados['autores'] = $this->modelusuarios->listar_autores();

        //Dados a serem enviados para o cabeçalho // 
        $dados ['titulo'] = 'Sobre Nós';
        $dados ['subtitulo'] = 'Conheça nossa Equipe';


        $this->load->view('frontend/template/html-header',$dados);
		$this->load->view('frontend/template/header');
        $this->load->view('frontend/sobrenos');
        $this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
	}

    public function listar_titulo($id){
        $this->db->from('categoria');
        $this->db->where('id ='.$id);
        return $this->db->get()->result();
    }

    public function autores($id,$slung=null){
        $dados['categorias'] = $this->categorias;

        $dados['autores'] = $this->modelusuarios->listar_autor($id);
        

        //Dados a serem enviados para o cabeçalho // 
        $dados ['titulo'] = 'Sobre Nós';
        $dados ['subtitulo'] = 'Autor';
        

        $this->load->view('frontend/template/html-header',$dados);
		$this->load->view('frontend/template/header');
        $this->load->view('frontend/autor');
        $this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');




    }


}