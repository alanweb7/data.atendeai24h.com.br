<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdvancedTools extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('advanced_tools_model');
    }

    public function index()
    {
        $data['title'] = _l('advanced_tools');
        $this->load->view('formulario', $data);
    }
}
