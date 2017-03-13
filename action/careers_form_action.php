<?php
include_once('../common.php');
if(empty($mb) || empty($cp)){
  alert('비정상적인 접근입니다.');
}
print_r($_POST);
exit;


  $w = $_REQUEST['w'];

  if (isset($_REQUEST) && !empty($w)) {

    $charge_first_name = mysqli_real_escape_string($dbc, trim($_POST['charge_first_name']));
    $charge_last_name = mysqli_real_escape_string($dbc, trim($_POST['charge_last_name']));
    $charge_email = mysqli_real_escape_string($dbc, trim($_POST['charge_email']));
    $charge_phone1 = mysqli_real_escape_string($dbc, trim($_POST['charge_phone1']));
    $charge_phone2 = mysqli_real_escape_string($dbc, trim($_POST['charge_phone2']));
    $adress = mysqli_real_escape_string($dbc, trim($_POST['adress']));
    $tel = mysqli_real_escape_string($dbc, trim($_POST['tel']));
    $homepage = mysqli_real_escape_string($dbc, trim($_POST['homepage']));
    $foreign_company = mysqli_real_escape_string($dbc, trim($_POST['foreign_company']));
      if(!$foreign_company){
        $foreign_company = "N";
      }

    if($w == "w"){

      $sql2 = "INSERT INTO {$tr['careers_table']} (mb_id, foreign_company, company_name, adress, tel, homepage, main_img, sub_img1, sub_img2, sub_img3)
                     VALUES ('{$mb['id']}', '$foreign_company', '$company_name', '$adress', '$tel', '$homepage', '$main_img_name', '$sub_img1_name', '$sub_img2_name', '$sub_img3_name')";
      if(mysqli_query($dbc, $sql2)){
        alert('Edit this was done successfully.', TR_URL.'/company_form_list.php');
      }
      else{
        alert('Error', TR_URL.'/company_form_list.php');
      }

    }
    // else if($w == "u"){
    //   $sql2 = " update {$tr['company_table']} set
    //             company_name = '{$company_name}',
    //             adress = '{$adress}',
    //             tel = '{$tel}',
    //             homepage = '{$homepage}'
    //             $query_img
    //             WHERE mb_id = '{$mb['id']}'
    //             and id = '{$_POST['id']}'";
    //   mysqli_query($dbc, $sql2);
    //   alert("정상수정되었습니다.", TR_URL.'/company_form_list.php');
    // }
    // else if($w == "d"){
    //   $sql2 = " update {$tr['company_table']} set
    //             company_delete = '1'
    //             WHERE mb_id = '{$mb['id']}'
    //             and id = '{$_REQUEST['id']}'";
    //   mysqli_query($dbc, $sql2) or die(alert('비정상적인 접근입니다.'));
    //   alert("정상삭제되었습니다.", TR_URL.'/company_form_list.php');
    // }
  }


mysqli_close($dbc);
?>
