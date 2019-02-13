<?php
require_once 'Example.php';


class Demo extends Example
{
      public $age = 22;
      protected $location = "Chawkbazar";
      private $mobile = '01879654321';


      public function newOne() {
          echo 'In new one';
          $this->addition();
      }

      public function newTwo() {
          echo 'In new two';
      }

      public function newThree() {
          echo 'In new three';
      }
}