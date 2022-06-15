<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_order extends CI_Model {

  public function getSumBulanan()
    {
        $this->db->select_sum('harga_bahan');
        $this->db->where('MONTH(tgl_order)', date('m'));
        $query = $this->db->get('orderan');
        if ($query->num_rows() > 0) {
            return $query->row()->harga_bahan;
        } else {
            return 0;
        }
    }

	public function jumlahOrder()
{   
    $query = $this->db->get('orderan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahOrderUnfinish()
{   
    $this->db->select('*');
	$this->db->from('orderan');
	$this->db->where('status', 0);
	$query = $this->db->get();

    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahOrderUrgent()
{   
    $this->db->select('*');
  $this->db->from('orderan');
  $this->db->where('urgensi', 1);
  $query = $this->db->get();

    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}


function get_customer()
	{
   return $this->db->get('customer')->result_array();
	}

function get_kategori()
  {
   return $this->db->get('kategori')->result_array();
  }

  function get_bahanBaku()
  {
   return $this->db->get('bahan')->result_array();
  }

  function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  function update($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }


}

/* End of file Model_order.php */
/* Location: ./application/models/Model_order.php */