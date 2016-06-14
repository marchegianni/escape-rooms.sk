<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get the username & password from tbl_usrs
    function get_user($user, $password)
    {
        $sql = "select * from `users` where `username`='" . $user . "' and `password`='" . md5($password) . "'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}?>