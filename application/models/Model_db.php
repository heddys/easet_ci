<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_db extends CI_Model{


    function get_tabel_ipt(){
		$this->db->select('id,register,alas_hak,kelurahan,kecamatan,count(pemegang) as jumlah_pemegang');
		$this->db->from('list_ipt');
        $this->db->where('alas_hak <>', '');
        $this->db->where('register <>', '');
		$this->db->group_by('register');
		return $this->db->get();
	}

   function get_tabel_ipr(){
		$this->db->select('register_ipr,sum(luas_bangunan) as tot_luas,kecamatan,kelurahan,count(register_ipr) as jumlah_ipr');
		$this->db->from('list_ipr');
        $this->db->group_by('kecamatan');
		return $this->db->get();
	}

    function get_pemegang_by($reg){
        $this->db->select('id_persil,no_sk,pemegang,alamat,kelurahan,kecamatan,luas_tanah,status');
		$this->db->from('list_ipt');
        $this->db->where('register',$reg);
        $query = $this->db->get();
		return $query->result();
    }

    function get_ipr_by($kecamatan){
        $this->db->select('id_ipr,lokasi_ipr,masa_sk,pemegang,no_sk,luas_bangunan,luas_tanah');
		$this->db->from('list_ipr');
        // $this->db->where('kecamatan',$kecamatan);
        $this->db->like('kecamatan',$kecamatan);
        $query = $this->db->get();
		return $query->result();
    }

    function get_per_kecamatan(){
        $nonaktif="NON AKTIF";
        $this->db->select('kecamatan, count(pemegang) as jml_pemegang');
        $this->db->from('list_ipt');
        $this->db->where('status', $nonaktif);
        $this->db->group_by('kecamatan');
        $this->db->order_by('jml_pemegang','DESC');
        return $this->db->get();
    }

    function get_per_kecamatan_ipr(){
        $this->db->select('kecamatan, count(pemegang) as jml_pemegang');
        $this->db->from('list_ipr');
        $this->db->group_by('kecamatan');
        $this->db->order_by('jml_pemegang','DESC');
        return $this->db->get();
    }

    public function get_data_mbr()
    {
        $query = $this->db->query("SELECT a.* ,count(b.register_aset) as total,c.kode108_baru,c.nama_barang_baru,c.merk_alamat_baru,c.no_sertifikat FROM `data_aset_mbr` a left join data_usaha_mbr b on a.register=b.register_aset inner join kib_2022_audited c on a.register=c.register group by a.register order by total desc");

        return $query;
    }

    public function get_reg_mbr($reg)
    {
        return $this->db->get_where('data_usaha_mbr', array ('register_aset' => $reg));
    }

    public function get_ipt_laporan()
    {
        $this->db->select('*');
        $this->db->from('list_ipt');
        $this->db->where('register !=','');
        $this->db->order_by('register','ASC');
        $this->db->order_by('status','ASC');
        return $this->db->get();
        
    }


}

?>
