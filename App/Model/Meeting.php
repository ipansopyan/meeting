<?php
namespace App\Model;

use App\Model\User;
/**
 *
 */
class Meeting extends User
{

  function __construct()
  {

     // echo  $this->index();
  }

public function list()
{

      $con    = $this->openDb();
      $query  = mysqli_query($con, "SELECT * FROM meetings ORDER BY id DESC");
      return $query;
}

public function store($owner_id,$title,$description,$time,$place)
{
    $con = $this->openDb();
    $query  = mysqli_query($con, "INSERT INTO meetings (owner_id,title,description,waktu,place) VALUES ('$owner_id','$title','$description','$time','$place')");
    return $query;
}

public function joined($meeting_id)
{
      $con = $this->openDb();
      $query  = mysqli_query($con, "SELECT * FROM users JOIN meeting_user ON user_id = users.id WHERE meeting_id = '$meeting_id'" );
      return $query;
}

public function detail_meeting($meeting_id)
{
      $con = $this->openDb();
      $query  = mysqli_query($con, "SELECT * FROM meetings WHERE id = '$meeting_id'");
      $result = mysqli_fetch_array($query);
      return $result;
}

public function update($title,$description,$time,$place,$meeting_id)
{
  $con = $this->openDb();
      $query  = mysqli_query($con, "UPDATE meetings SET
                      title='$title',
                      description='$description',
                      waktu='$time',
                      place='$place'
                      WHERE id=$meeting_id");
    return $query;
}

public function cek($user_id,$meeting_id)
{
    $con = $this->openDb();
    $query  = mysqli_query($con, "SELECT * FROM meeting_user WHERE user_id = '$user_id' && meeting_id = '$meeting_id'");
    $result = mysqli_num_rows($query);
    return $result;
}

public function join($user_id,$meeting_id)
{
    $con = $this->openDb();
    $query  = mysqli_query($con, "INSERT INTO meeting_user (user_id,meeting_id) VALUES ('$user_id','$meeting_id')");
    return $query;
}

public function unjoin($user_id,$meeting_id)
{
  $con = $this->openDb();
    $query  = mysqli_query($con, "DELETE FROM meeting_user WHERE meeting_id = '$meeting_id' && user_id = '$user_id'");
    return $query;
}

}

 ?>
