<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_produk extends CI_Model {
		
		function __construct() 
		{
			parent :: __construct();
		}
		
		public function get_brg()
		{
			$data = $this->db->query("SELECT * FROM produk");
			return $data->result();
		}
		
		public function get_edit_data($id)
		{
			$data = $this->db->query("SELECT * FROM produk WHERE id='$id'");
			return $data->result();
		}
		
		public function count_brg()
		{
			$data = $this->db->query("SELECT * FROM produk");
			return $data->num_rows();
		}
		
		public function simpan_data()
		{
			
			$data = array(
				'id'          => "id",
				'nama_produk'        => $this->input->post('nama_produk'),
				'keterangan'         => $this->input->post('keterangan'),
				'harga'       => $this->input->post('harga'),
				'jumlah'              => $this->input->post('jumlah')
				
			);
			$this->db->insert('produk',$data);
			redirect('barang/index');
		}	
		
		public function eksekusi_edit()
		{
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			$config['max_width']     = '1024';
			$config['max_height']    = '768';
			$config['file_name']     = url_title($this->input->post('photo'));
			$filename = $this->upload->file_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			$data = $this->upload->data();
			
			$id = $this->input->post('id');
			$data = array(
				'id'                => "id",
				'nama_produk'             => $this->input->post('nama_produk'),
				'keterangan'         => $this->input->post('keterangan'),
				'harga '             => $this->input->post('harga'),
				'jumlah'             => $this->input->post('jumlah')
				
			);
			
			$this->db->where('id',$id); 
			$this->db->update('produk',$data); 
			redirect('barang/index');
		}	
		
		public function hapus_data($id)
		{
			$this->db->query("DELETE FROM produk WHERE id='$id'");
			redirect('barang/index');
		}
	}
?>	