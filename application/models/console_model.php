<?php

class Console_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function all_visit() {
        return $this->db->count_all_results('investigator');
    }

<<<<<<< HEAD
    function cloth_visit() {
        return $this->db->count_all_results('clothes_survey');
    }
=======
>>>>>>> df7dae3a86773755b446a5e076517c8ce3bea721
    function valid_visit() {
        return $this->db->count_all_results('restaurant_survey');
    }

    function query_all_visit() {
        $query = "SELECT uid, phone_num
                  FROM investigator;";
        $q = $this->db->query($query);
        $ret['all_uid'] = $q->result();

        return $ret;
    }

<<<<<<< HEAD
    function query_cloth_visit() {
        $query = "SELECT uid
                  FROM clothes_survey;";
        $q = $this->db->query($query);
        $ret['cloth_uid'] = $q->result();

        return $ret;
    }

=======
>>>>>>> df7dae3a86773755b446a5e076517c8ce3bea721
    function query_valid_visit() {
        $query = "SELECT uid
                  FROM restaurant_survey;";
        $q = $this->db->query($query);
        $ret['valid_uid'] = $q->result();

        return $ret;
    }
}

/* End of file Example.php */
<<<<<<< HEAD
/* Location: /application/models/Example.php */
=======
/* Location: /application/models/Example.php */
>>>>>>> df7dae3a86773755b446a5e076517c8ce3bea721
