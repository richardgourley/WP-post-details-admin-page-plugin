<?php
class QueryModel{
   protected $results;
   protected $args;
   
   public function __construct($args){
      $this->args = $args;
   }
   
}