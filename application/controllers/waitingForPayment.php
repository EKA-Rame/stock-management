<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WaitingForPayment extends CI_Controller {

    public function index()
    {
        $this->load->view('waitingForPayment');
    }
}
