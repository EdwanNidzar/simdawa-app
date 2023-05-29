<?php
class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Dashboard | SIMDAWA-APP";
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('home_view');
        $this->load->view('tamplate/footer');
    }
}
