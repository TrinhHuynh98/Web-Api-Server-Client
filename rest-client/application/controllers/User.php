<?php  
Class User extends CI_Controller{
    
    var $API="";
    
    function __construct() {
        parent::__construct();

        $this->API = "http://localhost/rest-api/rest-server";
    }
 //list user
    function listuser() {

        $data['user'] = json_decode($this->curl->simple_get($this->API . '/User'));
        $this->template->load('template', 'user/list', $data);
    }   

    function listca() {
        $data['category'] = json_decode($this->curl->simple_get($this->API . '/Category'));
        $this->template->load('template', 'listca', $data);
    }   

// user Register
        function register(){

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if (isset($_POST['submit'])) {

            if ($this->form_validation->run() !=  false) {

                $data = array(
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                );
                $insert = $this->curl->simple_post($this->API . '/User', $data, array(CURLOPT_BUFFERSIZE => 10));

                if ($insert) {
                    $this->session->set_flashdata('Success', 'New user add success');
                } else {
                    $this->session->set_flashdata('Failed', 'New user add failed');
                }
            } else {
                echo $this->session->set_flashdata('wrong', 'invalid data');
            }
          redirect('user/login');
        } else {
            $data['user'] = json_decode($this->curl->simple_get($this->API . '/User'));
            //var_dump($data);
            //$this->template->load('template','register', $data);
            $this->load->view('register', $data, FALSE);
           // $this->load->view('templates/header-script');
            
      
    }
}
      
    function login(){

        if (isset($_POST['submit'])) {

            $username= $this->input->post('username');
            $password= $this->input->post('password');

            $login= json_decode($this->curl->simple_get($this->API.'/User'));
            var_dump($login);
            //echo "<pre>";
            if ($login[0]->username!=$username or $login[0]->password!=$password) { 

                $this->session->set_flashdata('failed','Username and Password was wrong');
                redirect('user/login');
            }else {
               $this->session->set_userdata(array('username'=>$login[0]->username));
               $this->session->set_userdata(array('status_login'=>'ok'));
                redirect('Dashboard');
            }
      
        }else{
         
          $this->load->view('Login');      
        }
      
    }

    function edit() {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if (isset($_POST['submit'])) {
            if ($this->form_validation->run() == true) {

                $data = array(
                    'user_id'=>$this->input->post('user_id'),
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                );
                $update = $this->curl->simple_put($this->API . '/User', $data, array(CURLOPT_BUFFERSIZE => 10));

                if ($update) {
                    $this->session->set_flashdata('success', 'User Updated');
                } else {
                    $this->session->set_flashdata('failed', 'User can not update');
                }
            }else {
                $this->session->set_flashdata('wrong', 'Wrong data');
           }
             redirect('user/listuser');
        } else {

            $parms = array('user_id' => $this->uri->segment(3));
            $data['user'] = json_decode($this->curl->simple_post($this->API . '/edit_user',$parms));
            //var_dump($data);

            $this->template->load('template', 'user/edit', $data);
        }
    }

    function Delete($id) {
        if (empty($id)) {
            redirect('Kategori');
        } else {
            $delete = $this->curl->simple_delete($this->API . '/Kategori', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('Hapus', 'Sukses Hapus Kategori');
            } else {
                $this->session->set_flashdata('cancel', 'Gagal Hapus Kategori');
            }
            redirect('Kategori');
        }
    }


}


?>