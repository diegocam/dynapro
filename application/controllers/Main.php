<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        $data["page_name"] = "home";
        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }

    public function about() {
        $data["page_name"] = "about";
        $this->load->view('templates/header', $data);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    public function workouts() {
        $data["page_name"] = "workouts";
        $this->load->view('templates/header', $data);
        $this->load->view('workouts');
        $this->load->view('templates/footer');
    }

    public function progradeStandard() {
        $data["page_name"] = "prograde";
        $this->load->view('templates/header', $data);
        $this->load->view('prograde-standard');
        $this->load->view('templates/footer');
    }

}
