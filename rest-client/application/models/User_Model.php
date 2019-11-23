<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {

	var $API="";
    
    function __construct() {
        parent::__construct();

        $this->API = "http://localhost/rest-api/rest-server";
    }

	public function login($username, $password){
			//Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			//$result = $this->db->get('api_user');
			$result= json_decode($this->curl->simple_get($this->API.'/User'));

			if ($result->num_rows() == 1) {
				return $result->row(0);
			}else{
				return false;
			}
		}


}

/* End of file User_Model.php */
/* Location: ./application/models/User_Model.php */