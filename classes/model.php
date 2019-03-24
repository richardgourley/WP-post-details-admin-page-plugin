<?php
abstract class Model{
    protected $results;
    protected $args;
    protected $query;

    function __construct($args, $query){
       $this->args = $args;
       $this->query = $query;
    }

    function wp_query(){
       $query = new WP_Query($this->$args)
       $this->results = $results;
    }

    function bespoke_query(){
       global $wpdb;
       $stmt = $wpdb->prepare($this->$query);
    
       $this->results = $wpdb->get_results( $stmt ); //Returns array of objects
    }

    function get_results(){
       return $this->results;
    }

}