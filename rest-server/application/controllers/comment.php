<?php

require APPPATH . '/libraries/REST_Controller.php';

Class comment extends REST_Controller {

    
    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_get() {
        $this->db->select('*');
        $this->db->from('comment');
        $this->db->join('blog', 'blog.blog_id=comment.blog_id');
        $this->db->join('api_user', 'api_user.user_id=comment.user_id');
        $data = $this->db->get()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    function index_post() {
        $blog_id = $this->post('blog_id');
        $user_id = $this->post('user_id');
        $content = $this->post('content');
        
        $data = array(
            'blog_id' => $blog_id, 
            'user_id' => $user_id, 
            'content' => $content   
        );

        $this->db->insert('comment', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }

    function index_put() {
        $co_id = $this->put('co_id');
        $blog_id = $this->put('blog_id');
        $user_id = $this->put('user_id');
        $content = $this->put('content');
        
        $data = array(
            'co_id' => $co_id,
            'blog_id' => $blog_id, 
            'user_id' => $user_id, 
            'content' => $content 
        );
        $this->db->where('co_id', $co_id);
        $this->db->update('comment', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }
    
      function index_delete() {
        $co_id = $this->delete('co_id');
        $this->db->where('co_id', $co_id);
        $this->db->delete('comment');
        $message = array('co_id' => $co_id, 'message' => 'comment was deleted');
        $this->response($message, REST_Controller::HTTP_OK);
    }

}
?>

