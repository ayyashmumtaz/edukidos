<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_order extends CI_Model {

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

function get_customer()
	{
   return $this->db->get('customer')->result_array();
	}


}

/* End of file Model_order.php */
/* Location: ./application/models/Model_order.php */