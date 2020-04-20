<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {
    
    public function get($id){
        return $this->db->select('*')->from('users')->where('email', $id)->get()->result();
     
    }
}
 