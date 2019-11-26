<?php 

class Myadmin extends CI_Controller { // merupakan contoh inheritance, yang dimana class Myadmin diwarisi oleh class CI_Controller

	function __construct(){
		parent::__Construct();
		$this->load->database();
		$this->load->model("Modeladmin");
	}

	public function index(){ // merupakan contoh enkapsulasi, yang dimana method index memili hak akses public
		$data ['title'] = "Hap-Hap! Sport Hall";
		$data ['tampil'] = $this->Modeladmin->tampilkan_data();		
		$this->load->view('header',$data);
		$this->load->view('sidebar_dash');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
	}
	public function tambahdata(){
		$data ['title'] = "Tambah Data Sewa";	
		$this->load->view('header',$data);
		$this->load->view('sidebar_sewa');
		$this->load->view('sewa');
		$this->load->view('footer');
	}
	public function tampil_data(){
		$data ['title'] = "Jadwal Futsal";
		$data ['tampil'] = $this->Modeladmin->tampilkan_data();
		$this->load->view('header',$data);
		$this->load->view('sidebar_dash');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
	}
	public function aksi_tambah_data(){
		$nama = $this->input->post('nama');
		$telpon =$this->input->post('telpon');
		$tanggal =$this->input->post('tanggal');
		$mulai =$this->input->post('mulai');
		$selesai =$this->input->post('selesai');
		$lapangan =$this->input->post('lapangan');

		$data = array(
			'nama'=> $nama, 
			'telpon'=> $telpon,
			'tanggal'=> $tanggal,
			'mulai'=> $mulai,
			'selesai'=> $selesai,
			'lapangan'=> $lapangan
		);	
		
		$this->Modeladmin->tambah_data($data,'data_sewa');	
		redirect('Myadmin/tambahdata');
	}

	function edit($id){
		$where = array('id' => $id);
		$data ['title'] = "Edit Data";
		$data['data_sewa'] = $this->Modeladmin->edit_data($where,'data_sewa')->result();	
		$this->load->view('header',$data);
		$this->load->view('sidebar_sewa');		
		$this->load->view('update_sewa',$data);
		$this->load->view('footer');
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telpon = $this->input->post('telpon');
		$tanggal = $this->input->post('tanggal');
		$mulai = $this->input->post('mulai');
		$selesai = $this->input->post('selesai');
		$lapangan = $this->input->post('lapangan');

		$data = array( 
			'nama'=> $nama, 
			'telpon'=> $telpon,
			'tanggal'=> $tanggal,
			'mulai'=> $mulai,
			'selesai'=> $selesai,
			'lapangan'=> $lapangan
		);

		$where = array(
			'id' => $id
		);

		$this->Modeladmin->update_data($where,$data,'data_sewa');
		redirect('Myadmin/index');
	}


	function hapus($id){
		$where = array('id' => $id);
		$this->Modeladmin->hapus_data($where,'data_sewa');
		redirect('Myadmin/index');
	}

	public function maintenance(){
		$this->load->view('maintenance');
	}
}

//*Catatan 1*// 
//inhertance merupakan salah satu pilar didalam oop, yang dimana memiliki sifat mewarisi. seperti pada contoh di atas
//class Myadmin diwarisi oleh class CI_Controller yang dimana, class my admin dapat menggunakan property yang ada di class CI_Controller,
//dengan catatan, property yang dapat digunakan yaitu property yang memiliki hak akses public dan protected.


//*Catatan 2*//
//Enkapsulasi merupakan salah satu pilar didalam oop, yang dimana memiliki 3 hak akses untuk method dan property didalam class.
//macam akesnya yaitu private, protected dan public. tentunya didalam pilar inheritance pasti terdapat pilar enkapsulasi.
	