<?php

class products_model extends CI_MODEL {

    function getProducts() {
        $this->db->select();
        $this->db->from("products");
        $q = $this->db->get();
        return $q->result();
    }

}
