<?php
namespace App\Controller;

use App\Model\Meeting;


/**
 *
 */
class MeetingController extends Controller
{

  function __construct()
  {

    // $base_url = "https://localhost/httacess/App/";


    $this->$meeting = new Meeting();
  }

  public function index()
  {
    if ($_SESSION['name'] == null || $_SESSION['id'] == null) {
      header('Location: http://localhost/httaccess');
    }

    $meetings  = $this->$meeting->list();
    $view     = include "App/View/Meeting/meeting.php";
    unset($_SESSION['pesan']);
    return array($view,$meeting);

  }

  public function create_meeting()
  {
    if ($_SESSION['name'] == null || $_SESSION['id'] == null) {
      header('Location: http://localhost/httaccess');
    }
      $this->view('Meeting/create');
  }

  public function store_meeting()
  {
    if ($_SESSION['name'] == null || $_SESSION['id'] == null) {
      header('Location: http://localhost/httaccess');
    }

  $title          = $_POST['title'];
  $description    = $_POST['description'];
  $time           = $_POST['time'];
  $place          = $_POST['place'];
  $owner_id       = $_SESSION['id'];
{
    try {
      $this->$meeting->store($owner_id,$title,$description,$time,$place);
      header("Location: index.php?meeting=home");
    } catch (\Exception $e) {

    }

  }
}

public function detail_meeting()
{
  if ($_SESSION['name'] == null || $_SESSION['id'] == null) {
    header('Location: http://localhost/httaccess');
  }

    $meeting_id = isset($_GET['id'])?$_GET['id']:NULL;
    $joined     = mysqli_num_rows($this->$meeting->joined($meeting_id));
    $user_join  = $this->$meeting->joined($meeting_id);
    $meeting    = $this->$meeting->detail_meeting($meeting_id);

    include "App/View/Meeting/detail_meeting.php";
}

public function edit_meeting()
{
  if ($_SESSION['name'] == null || $_SESSION['id'] == null) {
    header('Location: http://localhost/httaccess');
  }

  $meeting_id = isset($_GET['id'])?$_GET['id']:NULL;
  $meeting    = $this->$meeting->detail_meeting($meeting_id);

  if ($meeting['owner_id'] != $_SESSION['id']) {
    $_SESSION['pesan']  = 'anda bukan pembuat meeting';
    header("Location: index.php?meeting=list");
  }

  include "App/View/Meeting/edit_meeting.php";
}

public function update()
{
  if ($_SESSION['name'] == null || $_SESSION['id'] == null) {
    header('Location: http://localhost/httaccess');
  }

  if ($_SESSION['name'] == '' && $_SESSION['email'] == '') {
  header("Location: index.php");
}

$title          = $_POST['title'];
$description    = $_POST['description'];
$time           = $_POST['time'];
$place          = $_POST['place'];
$meeting_id     = $_POST['meeting_id'];
{
  try {
    $delete = $this->$meeting->update($title,$description,$time,$place,$meeting_id);
    $_SESSION['pesan'] = 'meeting updated';
    header("Location: index.php?meeting=home");
  } catch (\Exception $e) {

  }

}
}


}



 ?>
