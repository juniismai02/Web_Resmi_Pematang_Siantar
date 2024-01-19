<?php
class Kolom_informasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index() {
		$jum = $this->m_tulisan->berita();
		$page = $this->uri->segment(3);
		if (!$page) {
			$offset = 0;
		} else {
			$offset = $page;
		}
		$limit = 15;
		$config['base_url'] = base_url() . 'kolom_informasi/index/';
		$config['total_rows'] = $jum->num_rows();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
	
		// Hapus bagian konfigurasi pagination untuk styling
		$this->pagination->initialize($config);
		$x['page'] = $this->pagination->create_links();
	
		// Mengambil daftar berita dengan kategori "Kolom Informasi"
		$this->db->select('*');
		$this->db->from('tbl_tulisan');
		$this->db->join('tbl_kategori', 'tbl_kategori.kategori_id = tbl_tulisan.tulisan_kategori_id');
		$this->db->where('tbl_kategori.kategori_nama', 'Kolom Informasi');
		$this->db->order_by('tbl_tulisan.tulisan_views', 'DESC');
		$this->db->limit($limit, $offset);
		$x['data'] = $this->db->get();
	
		$x['category'] = $this->db->get('tbl_kategori');
		$x['populer'] = $this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 15");
		$this->load->view('depan/v_kolom_informasi', $x);
	}
	
	
	function detail($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_tulisan', array('tulisan_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['tulisan_id'];
			$this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data=$this->m_tulisan->get_berita_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['tulisan_id'];
			$x['title']=$row['tulisan_judul'];
			$x['image']=$row['tulisan_gambar'];
			$x['blog'] =$row['tulisan_isi'];
			$x['tanggal']=$row['tanggal'];
			$x['author']=$row['tulisan_author'];
			$x['kategori']=$row['tulisan_kategori_nama'];
			$x['slug']=$row['tulisan_slug'];
			$x['show_komentar']=$this->m_tulisan->show_komentar_by_tulisan_id($kode);
			$x['category']=$this->db->get('tbl_kategori');
			$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 6");
			$this->load->view('depan/v_blog_detail',$x);
		}else{
			redirect('artikel');
		}
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
		 if($query->num_rows() > 0){
			 $x['data']=$query;
			 $x['category']=$this->db->get('tbl_kategori');
 			 $x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 15");
			 $this->load->view('depan/v_blog',$x);
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('artikel');
		 }
	}



	

    function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_tulisan->cari_berita($keyword);
				if($query->num_rows() > 0){
					$x['data']=$query;
					$x['category']=$this->db->get('tbl_kategori');
  				$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 15");
          $this->load->view('depan/v_blog',$x);
	 		 }else{
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('artikel');
			 }
    }

		function komentar(){
				$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
				$data=$this->m_tulisan->get_berita_by_kode($kode);
				$row=$data->row_array();
				$slug=$row['tulisan_slug'];
				$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
				$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
				$komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
				if(empty($nama) || empty($email)){
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
					redirect('artikel/'.$slug);
				}else{
					$data = array(
			        'komentar_nama' 			=> $nama,
			        'komentar_email' 			=> $email,
			        'komentar_isi' 				=> $komentar,
							'komentar_status' 		=> 0,
							'komentar_tulisan_id' => $kode
					);

					$this->db->insert('tbl_komentar', $data);
					$this->session->set_flashdata('msg','<div class="alert alert-info">Komentar Anda akan tampil setelah moderasi.</div>');
					redirect('artikel/'.$slug);
				}
		}

}
