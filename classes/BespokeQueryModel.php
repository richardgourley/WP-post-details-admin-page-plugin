<?php
class BespokeQueryModel{
   protected $results;
   protected $query;
   protected $query_params;
   
   public function __construct($query, $query_params){
      $this->query = $query;
      $this->query_params = $query_params;
   }

   public function perform_query(){
      global $wpdb;
      $stmt = $wpdb->prepare($this->query, $this->query_params);
      $this->results = $wpdb->get_results($stmt);
   }

   public function return_results(){
      return $this->results;
   }
   
}