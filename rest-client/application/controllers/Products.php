<?php  
Class Products extends CI_Controller{
    
    var $API="";
    
    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->API = "http://localhost/rest-api/rest-server";
    }
 //list user
    function listpro() {

        //$user_id =  $this->session->userdata('user_id');
        $data['products'] = json_decode($this->curl->simple_get($this->API . '/products'));

        $test['products'] = json_decode($this->curl->simple_get($this->API . '/products/fetch_single_product'));
        var_dump($test);
        $this->template->load('template', 'products/list_pro', $data);
    }   




     

// user Register
        function add(){

        $this->form_validation->set_rules('pro_name', 'pro_name', 'required');
        $this->form_validation->set_rules('ca_id', 'ca_id', 'required');
        //$this->form_validation->set_rules('img', 'img', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('short', 'short', 'required');

        if (isset($_POST['submit'])) {

            if ($this->form_validation->run() !=  false) {

                $data = array(
                    'pro_name' => $this->input->post('pro_name'),
                    'ca_id' => $this->input->post('ca_id'),
                    'img' => $this->upload(),
                    'price' => $this->input->post('price'),
                    'short' => $this->input->post('short'),
                    'user_id' => $this->session->userdata('user_id'),
                );
               
                $insert = $this->curl->simple_post($this->API . '/Products', $data, array(CURLOPT_BUFFERSIZE => 10));
                var_dump($insert);

                if ($insert) {
                    $this->session->set_flashdata('Success', 'New products add success');
                } else {
                    $this->session->set_flashdata('Failed', 'New products add failed');
                }
            } else {

                echo $this->session->set_flashdata('wrong', 'Something wrong');
            }
          redirect('products/listpro');

        } else {
            $data['products'] = json_decode($this->curl->simple_get($this->API . '/Products'));
            //var_dump($data);
            $this->template->load('template','products/add_pro', $data);
            //$this->load->view('products/add_pro', $data, FALSE);
        }
      
    }

    function upload() {
        $config['upload_path'] = './uploads/img';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 5000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

    function edit() {
        $this->form_validation->set_rules('pro_name', 'pro_name', 'required');
        $this->form_validation->set_rules('ca_name', 'ca_name', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('short', 'short', 'required');


        if (isset($_POST['submit'])) {
            if ($this->form_validation->run() == true) {

                $data = array(
                    'pro_id'=>$this->input->post('pro_id'),
                    'pro_name' => $this->input->post('pro_name'),
                    'ca_name' => $this->input->post('ca_name'),
                    'price' => $this->input->post('price'),
                    'short' => $this->input->post('short'),
                );
                $update = $this->curl->simple_put($this->API . '/Products', $data, array(CURLOPT_BUFFERSIZE => 10));

                if ($update) {
                    $this->session->set_flashdata('success', 'Products Updated');
                } else {
                    $this->session->set_flashdata('failed', 'Products can not update');
                }
            }else {
                $this->session->set_flashdata('wrong', 'Wrong data');
           }
             redirect('products/list_pro');
        } else {

            $parms = array('pro_id' => $this->uri->segment(3));
            $data['products'] = json_decode($this->curl->simple_post($this->API . '/edit_pro',$parms));
            //var_dump($data);

            $this->template->load('template', 'products/edit_pro', $data);
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