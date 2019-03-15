<?php
class DbClass{
    protected $db;
    protected $results;

    public function __construct(){
        global $wpdb;
        $this->db = $wpdb;
    }

    public function get_results($query, $params, $single){
       
    }
}