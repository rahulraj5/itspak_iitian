<?php
class Custom404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
        // View name
        $this->load->view('404page/custom404view');
    }
}
?>