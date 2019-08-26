<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	


//*
// Esta función me carga la sección Empresa
//*
	public function index()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('empresa_view');
		$this->load->view('footer_view');
	}



//*
// Esta función me carga la sección Servicios 
//*
	public function servicios()
	{
		
	}



//*
// Esta función me carga la sección Soluciones
//*
	public function soluciones()
	{
		
	}



//*
// Esta función me carga la sección Contacto 
//*
	public function contacto()
	{
		
	}




}
