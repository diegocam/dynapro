<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index() {
        $data["page_name"] = "products";

        $this->load->model("products_model");
        $data['products'] = $this->products_model->getProducts();
        $this->load->view('templates/header', $data);
        $this->load->view('products', $data);
        $this->load->view('templates/footer');
    }

    public function test() {
        var_dump("TEST");
    }

}
