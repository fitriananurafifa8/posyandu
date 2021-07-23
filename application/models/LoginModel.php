<?php

class LoginModel extends CI_model{
    public function checkLogin($table, $where){
        return $this->db->get_where($table, $where);
    }
}

?>