   <?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

   class User_model extends CI_Model {

      public function __construct()
      {
            parent::__construct();
      }

      public function semua()
      {
         return $this->db->select('*')->from('members')->order_by('id', 'DESC')->get()->result();
      }
      
      public function showadmin()
      {
         return $this->db->select('*')->from('users')->order_by('id', 'DESC')->get()->result();
      }

      public function cari($id)
      {
         return $this->db->select('*')->from('members')->where('id', $id)->get()->result();
      }
      public function cari_admin($id)
      {
         return $this->db->select('*')->from('users')->where('id', $id)->get()->result();
      }


      public function edit($data, $where)
      {
         return $this->db->where('id', $where)->update('members', $data);
      }
      
      public function editadmin($data, $where)
      {
         return $this->db->where('id', $where)->update('users', $data);
      }

      public function tambah($data)
      {
         $this->db->insert('members', $data);
         return $this->db->error();
      }

      public function tambah_admin($data)
      {
         $this->db->insert('users', $data);
         return $this->db->error();
      }

      public function hapus($where)
      {
         return $this->db->where('id', $where)->delete('members');
      }
   }