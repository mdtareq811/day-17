<?php


class Example
{
      public $name    = 'Md. Tareq Chowdhury';
      protected $city    = 'Chittagong';
      private $country = 'Bangladesh';
      public $value;

      public function __construct($data)
      {
          $this->value = $data;
      }

      public function addition(){
          echo $this->value;
      }
      protected function subtraction(){
          echo $this->value;
      }
      private function division(){
          echo 'In division';
      }
}