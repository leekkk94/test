<?php
require_once('../lib/connectvars.php');
$q1 = urldecode($_REQUEST["q1"]);
$q2 = urldecode($_REQUEST["q2"]);


$query = "SELECT * FROM {$tr['category2_table']} WHERE ct1_id = '{$q1}'";
$data = mysqli_query($dbc,$query);
if(($q2) == 'check'){
  while($row = mysqli_fetch_array($data)){
    ?>
    <li>
      <label class="checkbox">
        <?php echo $row['ct2_name']; ?><input type="checkbox" onclick="CountChecked(this);" value="1"><span class="icon"></span>
      </label>
    </li>
  <?php
  }
}
else if(($q2) == 'radio'){
  while($row = mysqli_fetch_array($data)){
    ?>
    <li>
      <label class="radio">
        <?php echo $row['ct2_name']; ?><input type="radio" name="category" id="company['<?php echo $row['id']; ?>']" value="<?php echo $row['id']; ?>" class="category"><span class="icon"></span>
      </label>
    </li>
  <?php
  }
}

?>
