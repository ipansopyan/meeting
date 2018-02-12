<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\Model;
use App\Model\User;
/**
 *
 */
class AuthController extends Controller
{

  function __construct()
  {
    $base_url = "http://localhost/httaccess/";
    $this->user = new User();


  }

  public function login()
  {

    $this->view('Auth/login');
    session_destroy();

  }

  public function logged()
  {

      $email    = $this->user->secret($_POST['email']);
      $password = $this->user->secret(sha1($_POST['password']));

      $result = $this->user->cek_login($email,$password);
      if ($result['3'] == $email && $result['2'] == $password) {
        $_SESSION['email'] = $result['email'];
        $_SESSION['name']  = $result['name'];
        $_SESSION['id']    = $result['id'];
        header("Location: index.php?meeting=home");
      }else {
          $_SESSION['pesan']  = 'user tidak ada';
          header('Location: http://localhost/httaccess');

        die;
        header("Location: index.php");

      }

      }

  public function logout()
  {

      header("Location: index.php");
      session_destroy();
  }

  public function register()
    {

      $this->view('Auth/register');
      session_destroy();
    }

  public function registered()
  {
  $name     = $this->user->secret($_POST['name']);
  $email    = $this->user->secret($_POST['email']);
  $phone    = $this->user->secret($_POST['phone']);
  $address  = $this->user->secret($_POST['address']);
  $password = $this->user->secret(sha1($_POST['password']));

  $result = $this->user->cek_user($email);

  if ($result > 0) {
    $_SESSION['pesan']  = 'user sudah terdaftar';
    header("Location: index.php?meeting=register");
  }else{
    try {
      $this->user->create_user($name,$email,$phone,$address,$password);
      $result = $this->user->cek_login($email,$password);
      $_SESSION['email'] = $result['email'];
      $_SESSION['name']  = $result['name'];
      $_SESSION['id']    = $result['id'];
      header("Location: index.php?meeting=home");
    } catch (\Exception $e) {

    }

  }
}





}


 ?>
