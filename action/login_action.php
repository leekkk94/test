<?php
include_once('../common.php');
  // If the user isn't logged in, try to log them in
  if (empty($_SESSION['user_id'])) {

    if (isset($_POST)) {
      // Connect to the database

      // Grab the user-entered log-in data
      $user_id = mysqli_real_escape_string($dbc, trim($_POST['user_id']));
      $password = mysqli_real_escape_string($dbc, trim($_POST['password']));


      if (!empty($user_id) && !empty($password)) {

        // Look up the username and password in the database
        $query = "SELECT * FROM {$tr['member_table']} WHERE user_id = '$user_id' AND password = SHA1('$password')";
        $data = mysqli_query($dbc, $query);
        echo $query;
          if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);

          // echo $row['status'];
          if($row['status'] == 1){
            $_SESSION['user_id'] = $row['user_id'];
            if($_POST['keep_login'] == Y){
              setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
            }
            $home_url =  TR_URL.'/index.php';
            goto_url($home_url);
          }
        }
        else {
          // The username/password are incorrect so set an error message
          //alert('Sorry, you must enter a valid email and password to log in.');
          ?>
          <script>
          alert('Sorry, you must enter a valid email and password to log in.');
          history.back();
          </script>
          <?php
        }
      }
      else {
        // The username/password weren't entered so set an error message
        //alert('Sorry, you must enter your email and password to log in.');
        ?>
        <script>
        alert('Sorry, you must enter your email and password to log in.');
        history.back();
        </script>
        <?php
      }
    }
  }

  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  else {
    $home_url =  TR_URL.'/index.php';
    goto_url($home_url);
  }

?>
