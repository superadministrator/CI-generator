<?php

class Front extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['content']='front';
        $this->load->view('template',$data);
    }

}
?>
