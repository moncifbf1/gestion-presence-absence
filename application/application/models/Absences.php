<?php
/**
 * Created by PhpStorm.
 * User: moncifbf
 * Date: 10/05/15
 * Time: 13:31
 */
class Absences extends CI_Model {

    var $idAbsence   = '';
    var $etudiant = '';
    var $dateAbsence    = '';
    var $heureAbsence    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getAll()
    {
        $query = $this->db->get('absence');
        return $query->result();
    }

}