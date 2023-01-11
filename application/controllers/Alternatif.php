<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->library('Form_validation');
        $this->load->library('M_db');
		$this->load->model('Karyawan_model','mod_karyawan');
		$this->load->model('Kriteria_model','mod_kriteria');
		$this->load->model('Alternatif_model','mod_alternatif');
		$this->load->library('Ion_auth');
		ceklogin();

    }
    
    function index()
    {
 
    	$sql="SELECT alternatif.id_alternatif,karyawan.id_karyawan,karyawan.nama_karyawan,karyawan.alamat_karyawan, karyawan.no_telpon, alternatif.status FROM alternatif LEFT JOIN karyawan ON alternatif.id_karyawan = karyawan.id_karyawan ";
        $data['data']=$this->m_db->get_query_data($sql);
        $this->template->load('template/backend/dashboard', 'alternatif/alternatif_list', $data);
    }

    function create()
    {
    			
			$id_karyawan=$this->input->post('id_karyawan');
			$kriteria=$this->input->post('kriteria');
			$this->mod_alternatif->alternatif_add($id_karyawan,$kriteria);

			$d2=$this->m_db->get_data('alternatif');
			if(!empty($d2))
			{
				$listKaryawan="";
				foreach($d2 as $r)
				{
					$listKaryawan.=$r->id_karyawan.",";
				}
				$listKaryawan=substr($listKaryawan,0,-1);
				
				$sql="Select * from karyawan Where id_karyawan NOT IN ($listKaryawan)";
				$d['karyawan']=$this->m_db->get_query_data($sql);
				$d['kriteria']=$this->mod_kriteria->kriteria_data();
	        	$this->template->load('template/backend/dashboard', 'alternatif/alternatif_form', $d);
			}else{

	        $d['karyawan']=$this->mod_karyawan->karyawan_data();
	        $d['kriteria']=$this->mod_kriteria->kriteria_data();
	        $this->template->load('template/backend/dashboard', 'alternatif/alternatif_form', $d);
	    }
		
	}


	function edit()
    {
    			
			$id_karyawan=$this->input->post('id_karyawan');
			$kriteria=$this->input->post('kriteria');
			$this->mod_alternatif->alternatif_add($id_karyawan,$kriteria);

			$d2=$this->m_db->get_data('alternatif');
			if(!empty($d2))
			{
				$listKaryawan="";
				foreach($d2 as $r)
				{
					$listKaryawan.=$r->id_karyawan.",";
				}
				$listKaryawan=substr($listKaryawan,0,-1);
				
				$sql="Select * from karyawan Where id_karyawan NOT IN ($listKaryawan)";
				$d['karyawan']=$this->m_db->get_query_data($sql);
				$d['kriteria']=$this->mod_kriteria->kriteria_data();
	        	$this->template->load('template/backend/dashboard', 'alternatif/alternatif_form', $d);
			}else{

	        $d['karyawan']=$this->mod_karyawan->karyawan_data();
	        $d['kriteria']=$this->mod_kriteria->kriteria_data();
	        $this->template->load('template/backend/dashboard', 'alternatif/alternatif_form', $d);
	    }
		
	}

	function hapus()
	{
		$id=$this->input->get('alternatif');
		if($this->mod_alternatif->alternatif_delete($id)==TRUE)
		{
			redirect('alternatif');
		}else{
			redirect('alternatif');
		}
	}
    
}
