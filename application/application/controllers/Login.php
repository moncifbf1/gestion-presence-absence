<?php
/**
 * Created by PhpStorm.
 * User: moncifbf
 * Date: 10/05/15
 * Time: 12:03
 */

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
    }

    public function index()
    {
        $this->load->view('Login');
    }

    public function go()
    {
        $username = $this->input->post('loginUser');
        $password = $this->input->post('passUser');

        $data = $this->Users->checkUser($username,$password);
        if($data == false)
        {
            echo "error";
        }
        else
        {
            if($data[0]->typeUser == 0)
            {
                $sess_array = array();
                $sess_array = array(
                    'id' => $data[0]->idUser,
                    'username' => $data[0]->loginUser,
                    'type' => $data[0]->typeUser
                );
                $this->session->set_userdata('logged_in', $sess_array);
                redirect('Administration', 'refresh');
            }
            elseif($data[0]->typeUser == 1)
            {
                $this->load->view('dashboard/user');
            }
        }
    }
}