<?php

require APPPATH . '/libraries/REST_Controller.php';

Class Products extends REST_Controller {

    
    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_get() {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('category', 'category.ca_id=products.ca_id');
        $this->db->join('api_user', 'api_user.user_id=products.user_id');
        $data = $this->db->get()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }
    

    /*
    public function index_get($id = 0)
    {
        if(!empty($id)){
            $data = $this->db->get_where("products", ['user_id' => $id])->num_rows();
        }else{
            $data = $this->db->get("products")->num_rows();
        }

             if($data->num_rows() == 1)
           {
               return $this->response($data, REST_Controller::HTTP_OK);
           }
           else
           {
             return $this->response("No ISBN specified", 400);
     
        }
    }
   */

    function index_post() {

        $ca_id = $this->post('ca_id');
        $user_id = $this->post('user_id');
        $pro_name = $this->post('pro_name');
        $img = $this->post('img');
        $price = $this->post('price');
        $short = $this->post('short');


        $data = array(
            'ca_id' => $ca_id, 
            'user_id' => $user_id,
            'img'=>$img, 
            'pro_name' => $pro_name, 
            'price' => $price,
            'short'=>$short,
        );
        //$this->db->where('pro_id', $pro_id);
        $this->db->insert('products', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }


    function index_put() {
        $pro_id = $this->put('pro_id');
        $ca_id = $this->put('ca_id');
        $user_id = $this->put('user_id');
        $pro_name = $this->put('pro_name');
        $img = $this->post('img');
        $price = $this->put('price');
        $short = $this->put('short');
        $data = array(
            'ca_id' => $ca_id, 
            'user_id' => $user_id, 
            'pro_name' => $pro_name,
            'img'=>$img, 
            'price' => $price,
            'short'=>$short,
        );

        $this->db->where('pro_id', $pro_id);
        $this->db->update('products', $data);
        $this->response($data, REST_Controller::HTTP_CREATED);
    }
    
      function index_delete() {
        $pro_id = $this->delete('pro_id');
        $this->db->where('pro_id', $pro_id);
        $this->db->delete('products');
        $message = array('pro_id' => $pro_id, 'message' => 'products was deleted');
        $this->response($message, REST_Controller::HTTP_OK);
    }

}
?>

