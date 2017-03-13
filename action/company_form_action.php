<?php
include_once('../common.php');
  if(empty($mb) || empty($cp)){
    alert('비정상적인 접근입니다.');
  }

  $w = $_REQUEST['w'];


  $company_name = mysqli_real_escape_string($dbc, trim($_POST['company_name']));
  $adress = mysqli_real_escape_string($dbc, trim($_POST['adress']));
  $tel = mysqli_real_escape_string($dbc, trim($_POST['tel']));
  $homepage = mysqli_real_escape_string($dbc, trim($_POST['homepage']));
  $foreign_company = mysqli_real_escape_string($dbc, trim($_POST['foreign_company']));
    if(!$foreign_company){
      $foreign_company = "N";
    }

  if (isset($_REQUEST) && !empty($w)) {
    $img_query = "";
    $main_img = $_FILES['main_img'];
    if($main_img['size']>0){
      checkimage($main_img);
      imgupload($main_img, "main-", COMPANY_UPLOAD_PATH);
      $main_img_name = $file_name;
      $img_query .= ",main_img='$file_name'";
    }

    $sub_img1 = $_FILES['sub_img1'];
    if($sub_img1['size']>0){
      checkimage($sub_img1);
      imgupload($sub_img1, "sub1-", COMPANY_UPLOAD_PATH);
      $sub_img1_name = $file_name;
      $img_query .= ", $sub_img1='$file_name'";
    }
    $sub_img2 = $_FILES['sub_img2'];
    if($sub_img2['size']>0){
      checkimage($sub_img2);
      imgupload($sub_img2, "sub2-", COMPANY_UPLOAD_PATH);
      $sub_img2_name = $file_name;
      $img_query .= ", $sub_img2='$file_name'";
    }
    $sub_img3 = $_FILES['sub_img3'];
    if($sub_img3['size']>0){
      checkimage($sub_img3);
      imgupload($sub_img3, "sub3-", COMPANY_UPLOAD_PATH);
      $sub_img3_name = $file_name;
      $img_query .= ", $sub_img3='$file_name' ";
    }


    if($w == "w"){

      $sql2 = "INSERT INTO {$tr['company_table']} (mb_id, foreign_company, company_name, adress, tel, homepage, main_img, sub_img1, sub_img2, sub_img3)
                     VALUES ('{$mb['id']}', '$foreign_company', '$company_name', '$adress', '$tel', '$homepage', '$main_img_name', '$sub_img1_name', '$sub_img2_name', '$sub_img3_name')";
      if(mysqli_query($dbc, $sql2)){
        alert('Edit this was done successfully.', TR_URL.'/company_form_list.php');
      }
      else{
        alert("ERROR", TR_URL.'/company_form_list.php');
      }

    }
    else if($w == "u"){
      $sql2 = " update {$tr['company_table']} set
                company_name = '{$company_name}',
                adress = '{$adress}',
                tel = '{$tel}',
                homepage = '{$homepage}',
                foreign_company = '{$foreign_company}'
                $img_query
                WHERE mb_id = '{$mb['id']}'
                and id = '{$_POST['id']}'";
      if(mysqli_query($dbc, $sql2)){
        echo $sql2;
        alert("정상수정되었습니다.", TR_URL.'/company_form_list.php');
      }
      else{
        alert("ERROR", TR_URL.'/company_form_list.php');
      }
    }
    else if($w == "d"){
      $sql2 = " update {$tr['company_table']} set
                company_delete = '1'
                WHERE mb_id = '{$mb['id']}'
                and id = '{$_REQUEST['id']}'";
      mysqli_query($dbc, $sql2) or die(alert('비정상적인 접근입니다.'));
      alert("정상삭제되었습니다.", TR_URL.'/company_form_list.php');
    }
  }


mysqli_close($dbc);
?>
