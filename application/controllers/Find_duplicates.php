<?php

class Find_duplicates extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data = [];  // Capitalize the first letter
        $add_CSS_files = [
            'pages/string/common.css',
        ];
        $headerData = [
            'CSS_files' => $add_CSS_files,
            'title' => ucfirst('Find duplicate words Online.'),
        ];

        $this->load->view('templates/header', $headerData);
        $this->load->view('duplicate', $data);
        $this->load->view('templates/footer', $data);
    }
}
