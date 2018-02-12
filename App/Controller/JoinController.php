<?php
namespace App\Controller;


use App\Controller\Controller;
use App\Model\Model;
use App\Model\Meeting;


/**
 *
 */
class JoinController extends Controller
{

  function __construct()
  {
    $this->meeting = new Meeting();
  }

  public function join()
  {

    if ($_SESSION['name'] == null && $_SESSION['email'] == null) {
      header('Location: http://localhost/httaccess');
    }
    $meeting_id = isset($_GET['id'])?$_GET['id']:NULL;
    $user_id    =  $_SESSION['id'];

    $cek_meeting = $this->meeting->cek($user_id,$meeting_id);

    if ($cek_meeting > 0) {
      $_SESSION['pesan'] = 'Anda Telah Join ke meeting ini';
      $_SESSION['status'] = 'joined';
      header("Location: index.php?meeting=home");
    }elseif ($cek_meeting == 0) {
      $join = $this->meeting->join($user_id,$meeting_id);
      $_SESSION['pesan'] = 'join berhasil';
      $_SESSION['status'] = 'joined';
      header("Location: index.php?meeting=home");
    }else {
      echo "error";
    }

  }

  public function unjoin()
  {
      if ($_SESSION['name'] == null && $_SESSION['email'] == null) {
        header('Location: http://localhost/httaccess');
      }
      $meeting_id = isset($_GET['id'])?$_GET['id']:NULL;
      $user_id    = $_SESSION['id'];

      $cek_meeting = $this->meeting->cek($user_id,$meeting_id);
      if ($cek_meeting > 0) {
        $_SESSION['pesan'] = 'anda berasil unjoin';
        $unjoin = $this->meeting->unjoin($user_id,$meeting_id);
        header("Location: index.php?meeting=home");
      }else {
        // $join = $this->dataService->join_meeting($user_id,$meeting_id);
        $_SESSION['pesan'] = 'anda belum join';
        header("Location: index.php?meeting=home");
      }
  }







}



 ?>
