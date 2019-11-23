
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
    //protected $user_table = 'api_user';
    /**
     * User Login
     * ----------------------------------
     * @param: username or email address
     * @param: password
     */

    public function __construct() {
        parent::__construct();
        
        // Load the database library
        $this->load->database();
        
        $this->user_table = 'api_user';
    }
    

    public function user_login($username, $password)
    {
        
        $this->db->where('username', $username);
        $result = $this->db->get($this->user_table);

        if ($result->num_rows() == 1) {
                return $result->row(0);
            }else{
                return false;
            }
    }


     public function getbyid($ca_id)
    {
        return $this->db->select('*')->from('category')->where('ca_id',$ca_id)->get()->row();
    }

}
