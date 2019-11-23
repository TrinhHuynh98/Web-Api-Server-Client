<?php

require APPPATH . '/libraries/REST_Controller.php';

class Category extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_get() {
        $category = $this->db->get('category')->result();
        $this->response($category, REST_Controller::HTTP_OK);
    }


    function getbyid_get($ca_id) {

        $ca_id = $this->post('ca_id');

        $category = $this->User_Model->getbyid($ca_id);
        
        $this->response($category, REST_Controller::HTTP_OK);
    }



    function index_post() {
        $ca_name = $this->post('ca_name');
        $type = $this->post('type');
        $data = array(
            'ca_name' => $ca_name,
            'type' => $type
        );
        $this->db->insert('category', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }

    function index_put() {
        $ca_id = $this->put('ca_id');
        $ca_name = $this->put('ca_name');
        $type = $this->put('type');
        
         $data = array(
            'ca_name' => $ca_name,
            'type' => $type
        );
        $this->db->where('ca_id', $ca_id);
        $this->db->update('category', $data);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    function index_delete() {
        $ca_id = $this->delete('ca_id');
        $this->db->where('ca_id', $ca_id);
        $this->db->delete('category');
        $message = array('ca_id' => $ca_id, 'message' => 'category was deleted');
        $this->response($message, REST_Controller::HTTP_OK);
    }

}
