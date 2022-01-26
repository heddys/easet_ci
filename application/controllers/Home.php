<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->model('model_db');

		$data['get_kecamatan']=$this->model_db->get_per_kecamatan();
		$data['get_kecamatan_ipr']=$this->model_db->get_per_kecamatan_ipr();
		$this->load->view('header');
		$this->load->view('main_page',$data);
		$this->load->view('footer');

	}

	public function ipt(){

		$data['daftaript']=$this->model_db->get_tabel_ipt();

		$this->load->view('header');
		$this->load->view('list_ipt',$data);
		$this->load->view('footer');
	}

	public function ipr(){

		$data['daftaripr']=$this->model_db->get_tabel_ipr();

		$this->load->view('header');
		$this->load->view('list_ipr',$data);
		$this->load->view('footer');
	}

	public function tampil_pemegang(){
		$reg = $this->input->post('id');
		// $reg = "12345678-0000-105280-1";
		$result = $this->model_db->get_pemegang_by($reg);
		echo json_encode($result);
		// var_dump('<pre>'.print_r($result,true).'</pre>');

	}

	public function tampil_per_ipr(){
		$kecamatan = $this->input->post('id');
		$result = $this->model_db->get_ipr_by($kecamatan);
		echo json_encode($result);

	}
}
