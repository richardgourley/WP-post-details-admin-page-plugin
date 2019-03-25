<?php
class QueryModel{
   protected $results;
   protected $args;
   
   public function __construct($args){
      $this->args = $args;
   }

   public function perform_query(){
      $query = new WP_Query($this->args);
      $this->results = $query;
   }

   public function return_results(){
      return $this->results;
   }
   
}