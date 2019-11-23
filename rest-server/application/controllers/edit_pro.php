<?php

require APPPATH . '/libraries/REST_Controller.php';

Class edit_pro extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

     function index_post() {
        $pro_id= $this->post('pro_id');
        $post = $this->db->get_where('products',array('pro_id'=>$pro_id))->result();
        $this->response($post, REST_Controller::HTTP_OK);
    }
    
 
}
?>

