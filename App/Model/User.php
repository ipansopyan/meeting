<?php
namespace App\Model;

/**
 *
 */
class User
{

  function __construct()
  {

  }

  public function openDb()
  {
    $host   = "localhost";
    $uname  = "root";
    $passwd = "ryuzaki15";
    $dbname = 'meeting';

    $con  = mysqli_connect($host, $uname, $passwd, $dbname);
    return $con;
  }

  public function cek_login($email,$password)
  {
        $con = $this->openDb();
        $query  = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' && password = '$password'");
        $row = mysqli_fetch_array($query);
        return $row;
  }

  public function cek_user($email)
  {
      $con = $this->openDb();
      $query  = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
      $result =  mysqli_num_rows($query);
      return $result;

  }

  public function create_user($name,$email,$phone,$address,$password)
  {
        $con    = $this->openDb();
        $query  = mysqli_query($con, "INSERT INTO users (name,email,phone,address,password) VALUES ('$name','$email','$phone','$address','$password')");
        return $query;
  }

  public function secret($data)
  {
      $con    = $this->openDb();
      $secret = mysqli_real_escape_string($con, $data);
      return $secret;
  }

}

 ?>
