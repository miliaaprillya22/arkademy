<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_produk');
	}
	
	public function index() 
	{
		$data['brg'] = $this->model_produk->get_brg();
		$data['c_brg']  = $this->model_produk->count_brg();
		$this->load->view('index',$data);
	}
	
	public function simpan_data() 
	{
		$this->model_produk->simpan_data();
		$data['brg'] = $this->model_produk->get_brg();
		$data['c_brg']  = $this->model_produk->count_barang();
		$this->load->view('index',$data);
	}
	
	public function edit_data($id) 
	{       
		$data['data']   = $this->model_produk->get_edit_data($id); 
		$data['brg']    = $this->model_produk->get_brg();
		$data['c_brg']  = $this->model_produk->count_brg();
		$this->load->view('brg',$data);
	}
	
	public function eksekusi_edit() 
	{
		$this->model_produk->eksekusi_edit(); 
	}
	
	public function hapus_data($id) 
	{
		$this->model_produk->hapus_data($id);
	}
	
}
?>