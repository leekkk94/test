<?php
require_once('../lib/connectvars.php');
$q = urldecode($_REQUEST["q"]);

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$sql = "SELECT user_id FROM {$tr['member_table']}
          WHERE user_id = '$q'";

mysqli_set_charset($dbc,'utf8');
$data = mysqli_query($dbc, $sql) or die('sql에러1');
$count = mysqli_num_rows($data);

if($count > 0){
  echo "<p class='help-block text-warning'>This email already exists.</p>";
}
else{
    echo "<p class='help-block text-success'>This Email is posible.</p>";
}
?>
