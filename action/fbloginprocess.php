<?php
if(!empty($_POST['userid'])){

  $fbuserid = $_POST['userid'];
  $fbusername = $_POST['username'];
  $fbaccess = $_POST['fbaccesstoken'];

  require_once('../connectvars.php');

  $result_count = 0;

  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SERVER);
  mysqli_set_charset($dbc,'utf8');

  $query = "SELECT * FROM " . DB_01 . " WHERE email='".$fbuserid."'";
  $result = mysqli_query($dbc, $query);

  $result_count = mysqli_num_rows($result);

    if($result_count < 1) {
        //facebook으로 로그인한 아이디가 DB에 없을 경우.
        $query2 = "INSERT INTO " . DB_01 . " (id, user_type, email, password, name, facebook_token, date) " .
                            "VALUES (0, 1, '$fbuserid', NULL, '$fbusername', NULL, NOW())";
        $result2 = mysqli_query($dbc, $query2);

        $query = "SELECT * FROM " . DB_01 . " WHERE email='$fbuserid'";
        $result = mysqli_query($dbc, $query);

        session_start();

        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        //$_SESSION['name'] = iconv("euc-kr","utf-8", $row['name']);
        $_SESSION['name'] = $row['name'];
        //$_SESSION['user_picture_path'] = $row['user_picture_path'];
        $_SESSION['facebook'] = true;
        $_SESSION['fbtoken'] = $fbaccess;

    }
    else if($result_count == 1){
      $query = "SELECT * FROM " . DB_01 . " WHERE email='$fbuserid'";
      $result = mysqli_query($dbc, $query);

      session_start();

      $row = mysqli_fetch_assoc($result);

      $_SESSION['user_id'] = $row['id'];
      $_SESSION['email'] = $row['email'];
      //$_SESSION['name'] = iconv("euc-kr","utf-8", $row['name']);
      $_SESSION['name'] = $row['name'];
      //$_SESSION['user_picture_path'] = $row['user_picture_path'];
      $_SESSION['facebook'] = true;
      $_SESSION['fbtoken'] = $fbaccess;
    }

}
else {
  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
  header('Location: ' . $home_url);
}

?>
