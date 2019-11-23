<?php

require APPPATH . '/libraries/REST_Controller.php';

Class edit_user extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

     function index_post() {
        $user_id= $this->post('user_id');
        $post = $this->db->get_where('api_user',array('user_id'=>$user_id))->result();
        $this->response($post, REST_Controller::HTTP_OK);
    }
    
    function index_put(){
         $user_id= $this->put('user_id');
         $this->db->where('user_id',$user_id);
         $post= $this->db->get('api_user')->result();
         $this->response($post, REST_Controller::HTTP_OK);
    }
    
    
    


}
?>

