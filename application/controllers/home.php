<?php

class Home extends NAILS_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL:
     *
     *      http://example.com/home/index
     *
     * index() is a special method name and is the default to be
     * called if the second segment of the URL is blank. i.e it
     * also maps to:
     *
     *      http://example.com/home
     *
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at:
     *
     *     http://example.com/
     *
     */

    public function index()
    {
        $this->load->view('structure/header', $this->data);
        $this->load->view('home/index', $this->data);
        $this->load->view('structure/footer', $this->data);
    }
}
