<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_form extends CI_Model
{
    public function insertData($data)
    {
        return $this->db->insert('form_registration_hots', $data);
    }
}
