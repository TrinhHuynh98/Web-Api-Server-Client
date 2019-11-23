<?php

require APPPATH . '/libraries/REST_Controller.php';
class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);

        $this->load->model('User_Model');
    }

    function index_get() {
        $data = $this->db->get('api_user')->result();
        $this->response($data, REST_Controller::HTTP_OK);
        
    }

    function index_post() {
        $name = $this->post('name');
        $username = $this->post('username');
        $email = $this->post('email');
        $password = md5($this->post('password'));
        
        $data = array(
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
        );
        $this->db->insert('api_user', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }

    function index_put() {
    
        $user_id = $this->put('user_id');
        $name = $this->put('name');
        $username = $this->put('username');
        $email = $this->put('email');
        $password = $this->put('password');

        $data = array(
            'user_id' => $user_id,
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password,

        );

        $this->db->where('user_id', $user_id);
        $this->db->update('api_user', $data);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    function index_delete() {
        $user_id = $this->delete('user_id');
        $this->db->where('user_id', $user_id);
        $this->db->delete('api_user');

        $message = array(
            'user_id' => $user_id, 
            'message' => 'user was deleted!');
        $this->response($message, REST_Controller::HTTP_OK);
    }



    public function login_post()
    {
        header("Access-Control-Allow-Origin: *");

        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        
     
            // Load Login Function
            $output = $this->User_Model->user_login($this->input->post('username'), $this->input->post('password'));
            if (!empty($output) AND $output != FALSE)
            {
                
                $return_data = [
                    'user_id' => $output->user_id,
                    'name' => $output->name,
                    'email' => $output->email,
                    'created_at' => $output->created_at,
                    
                ];
               
                // Login Success
                $message = [
                    'status' => true,
                    'data' => $return_data,
                    'message' => "User login successful"
                ];
                $this->response($message, REST_Controller::HTTP_OK);
            } else
            {
                // Login Error
                $message = [
                    'status' => FALSE,
                    'message' => "Invalid Username or Password"
                ];
                $this->response($message, REST_Controller::HTTP_NOT_FOUND);
            }
        
    }

}
