<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Web extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }
        public function index(){
            $data['judul'] ="About Our Website";
            $data['active_menu'] = 'home';
            $this->load->view('v_header',$data);
            $this->load->view('v_index',$data);
            $this->load->view('v_footer',$data);
        }

        public function about(){
            $data['judul'] = "Happy Reading!";
            $data['active_menu'] = 'about'; // untuk halaman About
            $this->load->view('v_header', $data);
            $this->load->view('v_about', $data);
            $this->load->view('v_footer', $data);
        }
        public function music(){
            $data['judul'] = "Hope You Enjoy!";
            $data['active_menu'] = 'music'; // untuk halaman Music
            $this->load->view('v_header', $data);
            $this->load->view('v_music', $data); 
            $this->load->view('v_footer', $data);
        }
}
