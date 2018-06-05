<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('berita_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index
	public function index() {
		$site 				= $this->konfigurasi_model->listing();
		$user				= $this->user_model->listing();
		$berita				= $this->berita_model->listing();
		$kategori_berita	= $this->kategori_berita_model->listing();
		
		$data = array(	'title'				=> 'Halaman Utama',
						'user'				=> $user,
						'berita'			=> $berita,
						'kategori_berita'	=> $kategori_berita,
						'isi'				=> 'admin/dasbor/list');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	
	// General Configuration
	public function konfigurasi() {
		$site = $this->konfigurasi_model->listing();
		
		// Validasi 
		$this->form_validation->set_rules('namaweb','Website name website','required');
		$this->form_validation->set_rules('email','Email','valid_email');
		
		if($this->form_validation->run() === FALSE) {
			
		$data = array(	'title'	=> 'General Configuration',
						'site'	=> $site,
						'isi'	=> 'admin/dasbor/umum');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_konfigurasi'	=> $i->post('id_konfigurasi'),
							'home_setting'		=> $i->post('home_setting'),
							'namaweb'			=> $i->post('namaweb'),
							'tagline'			=> $i->post('tagline'),
							'tentang'			=> $i->post('tentang'),
							'website'			=> $i->post('website'),
							'email'				=> $i->post('email'),
							'alamat'			=> $i->post('alamat'),
							'telepon'			=> $i->post('telepon'),
							'hp'				=> $i->post('hp'),
							'fax'				=> $i->post('fax'),
							'keywords'			=> $i->post('keywords'),
							'metatext'			=> $i->post('metatext'),
							'facebook'			=> $i->post('facebook'),
							'twitter'			=> $i->post('twitter'),
							'instagram'			=> $i->post('instagram'),
							'google_map'		=> $i->post('google_map'),
							'id_user'			=> $this->session->userdata('id'));
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Site configuration updated successfully');
			redirect(base_url('admin/dasbor/konfigurasi'));
		}
	}
	
}