<?php

namespace App\Controller;

use App\Route;
use App\Model\Model;

class Controller
{




  public function __construct()
  {
    $base_url = "https://localhost/httaccess/";
  }


public function view($view)
{
    include  $base_url."App/View/".$view.".php";
}









}



 ?>
