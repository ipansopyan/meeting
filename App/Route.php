<?php
namespace App;
use App\Controller\Controller;
use App\Controller\AuthController;
use App\Controller\MeetingController;
use App\Controller\JoinController;





class Route
{
  // private $authController;

  function __construct()
  {
    $this->authController     = new AuthController();
    $this->meetingController  = new MeetingController();
    $this->joinController     = new JoinController();


  }

  public function getController()
  {
    $meeting = isset($_GET['meeting'])?$_GET['meeting']:NULL;
      try {

        //auth controller
          if (!$meeting || $meeting == 'login') {
            $this->authController->login();
          }elseif ($meeting == 'logout') {
            $this->authController->logout();
          }elseif ($meeting == 'register') {
            $this->authController->register();
          }elseif ($meeting == 'registered') {
            $this->authController->registered();
          } elseif ( $meeting == 'logged' ) {
              $this->authController->logged();
          }else{
              // $this->showError("Page not found", "Page for operation ".$op." was not found!");
              // echo "halaman belum di buat";
          }

          //meeting controller

          if ($meeting == 'home') {
            $this->meetingController->index();
          }elseif ($meeting == 'create_meeting') {
            $this->meetingController->create_meeting();
          }elseif ($meeting == 'store_meeting') {
            $this->meetingController->store_meeting();
          }elseif ($meeting == 'show') {
            $this->meetingController->detail_meeting();
          }elseif ($meeting == 'edit') {
            $this->meetingController->edit_meeting();
          }elseif ($meeting == 'update') {
            $this->meetingController->update();
          }

          //join controller

          if ($meeting == 'join') {
            $this->joinController->join();
          }elseif ($meeting == 'unjoin') {
            $this->joinController->unjoin();
          }
      } catch ( Exception $e ) {

          $this->showError("Application error", $e->getMessage());
      }
  }

  public function auth()
  {
      #code
  }
}

 ?>
