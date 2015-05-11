<?php
/**
 * Created by PhpStorm.
 * User: moncifbf
 * Date: 10/05/15
 * Time: 13:31
 */
class Users extends CI_Model {

    var $login   = '';
    var $password = '';
    var $type    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function checkUser($log, $pass)
    {
        $this->db->select('idUser, loginUser, passUser, typeUser');
        $this->db->from('utilisateur');
        $this -> db -> where('loginUser', $log);
        $this -> db -> where('passUser', $pass);
        $this -> db -> limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

}