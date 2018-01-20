<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

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
            'pages/homepage/style.css',
        ];
        $headerData = [
            'CSS_files' => $add_CSS_files,
        ];
        $this->load->view('templates/homepage_header', $headerData);
        $this->load->view('homepage');
        $this->load->view('templates/homepage_footer');
    }

    public function ya()
    {
        echo 'ya';
        $this->load->view('welcome_message');
    }

    public function privacy()
    {
        $data = [];  // Capitalize the first letter
        $add_CSS_files = [
            'pages/string/common.css',
            'pages/homepage/style.css',
        ];
        $headerData = [
            'CSS_files' => $add_CSS_files,
            'title' => 'privacy',
        ];
        $this->load->view('templates/homepage_header', $headerData);
        $this->load->view('privacy');
        $this->load->view('templates/homepage_footer');
    }
}
