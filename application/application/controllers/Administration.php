<?php
/**
 * Created by PhpStorm.
 * User: moncifbf
 * Date: 10/05/15
 * Time: 15:00
 */
class Administration extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Absences');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('dashboard/admin', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }

    public function getAbsences()
    {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['absences'] = $this->Absences->getAll();
        $this->load->view('liste_absences', $data);
    }
}