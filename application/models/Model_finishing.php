<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_finishing extends CI_Model
{
   public function getFinishingPacking()
   {
      $this->db->select('*');
      $finishing = array('finishing' => '0');
      $this->db->where($finishing);
      $this->db->from('orderan');
      $this->db->join('kategori', 'orderan.kategori = kategori.id');
      $this->db->join('customer', 'orderan.nama = customer.id');
      $query = $this->db->get();
      return $query;
   }

   public function getFinishingCutting()
   {
      $this->db->select('*');
      $finishing = array('finishing' => '1');
      $this->db->where($finishing);
      $this->db->from('orderan');
      $this->db->join('kategori', 'orderan.kategori = kategori.id');
      $this->db->join('customer', 'orderan.nama = customer.id');
      $query = $this->db->get();
      return $query;
   }

   public function getFinishingSeaming()
   {
      $this->db->select('*');
      $finishing = array('finishing' => '2');
      $this->db->where($finishing);
      $this->db->from('orderan');
      $this->db->join('kategori', 'orderan.kategori = kategori.id');
      $this->db->join('customer', 'orderan.nama = customer.id');
      $query = $this->db->get();
      return $query;
   }
   public function getFinishingJilid()
   {
      $this->db->select('*');
      $finishing = array('finishing' => '3');
      $this->db->where($finishing);
      $this->db->from('orderan');
      $this->db->join('kategori', 'orderan.kategori = kategori.id');
      $this->db->join('customer', 'orderan.nama = customer.id');
      $query = $this->db->get();
      return $query;
   }
}
