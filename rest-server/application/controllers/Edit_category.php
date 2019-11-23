<?php

require APPPATH . '/libraries/REST_Controller.php';

Class Edit_category extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_post() {
        $ca_id = $this->post('ca_id');
        $post    = $this->db->get_where('category',array('ca_id'=>$ca_id))->result();
        $this->response($post, REST_Controller::HTTP_OK);
    }


}
?>

