<?php 
class RivideController extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('beranda');
    }

    public function rivide()
    {
        $this->load->helper('url');
        $this->load->view('rivide/dashboard');
    }

}
?>
