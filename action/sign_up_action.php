<?php
include_once('../common.php');

// Insert the page header
$page_title = 'QUICKTRABAHO';



  // print_r($_POST);
  if (isset($_POST)) {

    // Grab the profile data from the POST
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $type_user = mysqli_real_escape_string($dbc, trim($_POST['type_user']));
    $type_sign = mysqli_real_escape_string($dbc, trim($_POST['type_sign']));
    $user_id = mysqli_real_escape_string($dbc, trim($_POST['user_id']));
    $first_name = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
    $last_name = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    $password_re = mysqli_real_escape_string($dbc, trim($_POST['password_re']));


    if($type_user == "company"){





      $company_name = mysqli_real_escape_string($dbc, trim($_POST['company_name']));
      $adress = mysqli_real_escape_string($dbc, trim($_POST['adress']));
      $tel = mysqli_real_escape_string($dbc, trim($_POST['tel']));
      $homepage = mysqli_real_escape_string($dbc, trim($_POST['homepage']));
      $foreign_company = mysqli_real_escape_string($dbc, trim($_POST['foreign_company']));
      if(!$foreign_company){
        $foreign_company = "N";
      }

    }





    if (!empty($first_name) && !empty($last_name) && !empty($password) && !empty($password_re) && ($password == $password_re)) {

      // Make sure someone isn't already registered using this username
      $sql = "SELECT user_id FROM {$tr['member_table']} WHERE user_id = '$user_id'";
      $data = mysqli_query($dbc, $sql);
      if (mysqli_num_rows($data) == 0) {
        if($type_user == "company"){

          $main_img = $_FILES['main_img'];
            checkimage($main_img);
            imgupload($main_img, "main-", COMPANY_UPLOAD_PATH);
            $main_img_name = $file_name;

          $sub_img1 = $_FILES['sub_img1'];
          if($sub_img1['size']>0){
            checkimage($sub_img1);
            imgupload($sub_img1, "sub1-", COMPANY_UPLOAD_PATH);
            $sub_img1_name = $file_name;
          }
          $sub_img2 = $_FILES['sub_img2'];
          if($sub_img2['size']>0){
            checkimage($sub_img2);
            imgupload($sub_img2, "sub2-", COMPANY_UPLOAD_PATH);
            $sub_img2_name = $file_name;
          }
          $sub_img3 = $_FILES['sub_img3'];
          if($sub_img3['size']>0){
            checkimage($sub_img3);
            imgupload($sub_img3, "sub3-", COMPANY_UPLOAD_PATH);
            $sub_img3_name = $file_name;
          }


          // The username is unique, so insert the data into the database
          $sql2 = "INSERT INTO {$tr['member_table']} (type_user, type_sign, user_id, password, first_name, last_name, email, join_date)
                    VALUES ('$type_user', '$type_sign', '$user_id', SHA1('$password'), '$first_name', '$last_name', '$user_id', NOW())";
          mysqli_query($dbc, $sql2);


          // 회원 정보가정상적으로 들어갔다면, id를 가져온다.
          $sql = "SELECT id FROM {$tr['member_table']} WHERE user_id = '$user_id'";
          $data = mysqli_query($dbc, $sql);
          $row = mysqli_fetch_array($data);

          $mb_id = $row['id'];

          $sql2 = "INSERT INTO {$tr['company_table']} (mb_id, company_name, main_img, adress, tel, homepage, sub_img1, sub_img2, sub_img3, foreign_company)
                     VALUES ('$mb_id', '$company_name', '$main_img_name', '$adress', '$tel', '$homepage', '$sub_img1_name', '$sub_img2_name', '$sub_img3_name', '$foreign_company')";
          mysqli_query($dbc, $sql2);

        }

        alert('Register This was done successfully.', TR_URL.'/login.php');

      }
      else {
        // An account already exists for this username, so display an error message
        alert('This account already exists');
        exit;
      }
    }
    else {
      ?>
      <script>
      alert('You must enter all of the sign-up data, including the desired password twice.');
      history.back();
      </script>
      <?php
      //alert();
    }

    mysqli_close($dbc);
  }

?>
