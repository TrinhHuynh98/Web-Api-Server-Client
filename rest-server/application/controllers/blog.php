<?php

require APPPATH . '/libraries/REST_Controller.php';

Class blog extends REST_Controller {

    
    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_get() {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('category', 'category.ca_id=blog.ca_id');
        $this->db->join('api_user', 'api_user.user_id=blog.user_id');
        
        $data = $this->db->get()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    function index_post() {
        $ca_id = $this->post('ca_id');
        $user_id = $this->post('user_id');
        $title = $this->post('title');
        $content = $this->post('content');
        $des = $this->post('des');
        $img = $this->post('img');

        $data = array(
            'ca_id' => $ca_id, 
            'user_id' => $user_id, 
            'title' => $title,
            'content'=>$content,
            'des'=>$des,
            'img'=>$img

        );
        $this->db->insert('blog', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }

    function index_put() {
        $blog_id = $this->put('blog_id');
        $ca_id = $this->put('ca_id');
        $user_id = $this->put('user_id');
        $title = $this->put('title');
        $content = $this->put('content');
        $des = $this->put('des');
        $img = $this->put('img');

        $data = array(
            'blog_id' => $blog_id,
            'ca_id' => $ca_id, 
            'user_id' => $user_id, 
            'title' => $title,
            'content'=>$content,
            'des'=>$des,
            'img'=>$img
        );
        $this->db->where('blog_id', $blog_id);
        $this->db->update('blog', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }
    
      function index_delete() {
        $blog_id = $this->delete('blog_id');
        $this->db->where('blog_id', $blog_id);
        $this->db->delete('blog');
        $message = array('blog_id' => $blog_id, 'message' => 'blog was deleted');
        $this->response($message, REST_Controller::HTTP_OK);
    }

}
?>

