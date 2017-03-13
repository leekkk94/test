<?php
include_once('common.php');
include_once('header.php');
if(!$mb || !$cp){
	$home_url =  TR_URL.'/index.php';
	goto_url($home_url);
	exit;
}
$id = $_GET['id'];
if($_GET['id']){
	$query = "SELECT * FROM {$tr['company_table']} WHERE mb_id = '{$mb['id']}' and id = '{$id}'";
	$data = mysqli_query($dbc,$query);
	$row = mysqli_fetch_array($data);
	if($row){
		$w = "u";
		$foreign_company = $row['foreign_company'];
		$company_name = $row['company_name'];
		$main_img = $row['main_img'];
		$adress = $row['adress'];
		$tel = $row['tel'];
		$homepage = $row['homepage'];
	}
	else{
		alert('This is a bad request.');
	}

}
else{
	$w = "w";
}


?>
<script>
function fwrite_submit(f){
	if(!f.company_name.value)
	{
		alert("'Company Name' is mandatory.");
		$("#companyName").focus();
		return false;
	}
	if(!f.adress.value)
	{
		alert("'Adress' is mandatory.");
		$("#adress").focus();
		return false;
	}

	if(!f.tel.value)
	{
		alert("'Tel' is mandatory.");
		$("#tel").focus();
		return false;
	}
}
</script>
			<section class="page-header page-header-xs">
				<div class="container text-center">

					<h1>사업장/채용정보 관리</h1>
					<ul class="page-header-tabs list-inline">
						<li><a href="<?php echo TR_URL; ?>/careers_list.php">등록된 채용정보</a></li>
						<li><a href="<?php echo TR_URL; ?>/careers_list_end.php">종료된 채용정보</a></li>
						<li class="active"><a href="<?php echo TR_URL; ?>/company_form_list.php">사업장 관리</a></li>
						<li><a href="<?php echo TR_URL; ?>/careers_form.php">채용정보 신규등록</a></li>
					</ul>
				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="form-area">


							<form id="mbFrm" action="<?php echo TR_ACTION_URL; ?>/company_form_action.php" method="post" enctype="multipart/form-data" onsubmit="return fwrite_submit(this);">
									<fieldset>
										<div class="row">
											<div class="col-md-12 text-center">
												<hr>
												<h4>사업장정보</h4>
												<hr>
											</div>
										</div>
										<input type="hidden" name="id" value="<?php echo $id; ?>">
										<input type="hidden" name="w" value="<?php echo $w; ?>">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="title">외국인회사 여부</label>

													<label class="checkbox">
															<input type="checkbox" name="foreign_company" value="Y" <?php if($foreign_company == Y) echo "checked='checked'"; ?>>
															<i></i> 외국인회사일경우 체크해주세요
													</label>
												</div>

											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
														<label class="title required">사업장명</label>
														<input type="text" name="company_name" id="companyName" value="<?php echo $company_name; ?>" class="form-control required">
												</div>
											</div>
										</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title">사업장 대표사진</label>
															<div class="fancy-file-upload fancy-file-primary">
																<i class="fa fa-upload"></i>
																<input type="file" class="form-control" name="main_img" onchange="jQuery(this).next('input').val(this.value);" id="mainImg">
																<input type="text" class="form-control" placeholder="no file selected" readonly="">
																<span class="button">Choose Image</span>
															</div>
															<p class="help-block">※ Max file size: 10Mb (jpg/jpeg/png) </p>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title required">사업장주소</label>
															<input type="text" name="adress" id="adress" value="<?php echo $adress; ?>" class="form-control required">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title required">대표번호</label>
															<input type="tel" name="tel" id="tel" value="<?php echo $tel; ?>" class="form-control required">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title">홈페이지</label>
															<input type="text" name="homepage" value="<?php echo $homepage; ?>" class="form-control required">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title">사업장 추가사진1</label>
															<div class="fancy-file-upload fancy-file-primary">
																<i class="fa fa-upload"></i>
																<input type="file" class="form-control" name="sub_img1" onchange="jQuery(this).next('input').val(this.value);">
																<input type="text" class="form-control" placeholder="no file selected" readonly="">
																<span class="button">Choose Image</span>
															</div>
															<p class="help-block">※ Max file size: 10Mb (jpg/jpeg/png) </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title">사업장 추가사진2</label>
															<div class="fancy-file-upload fancy-file-primary">
																<i class="fa fa-upload"></i>
																<input type="file" class="form-control" name="sub_img2" onchange="jQuery(this).next('input').val(this.value);">
																<input type="text" class="form-control" placeholder="no file selected" readonly="">
																<span class="button">Choose Image</span>
															</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title">사업장 추가사진3</label>
															<div class="fancy-file-upload fancy-file-primary">
																<i class="fa fa-upload"></i>
																<input type="file" class="form-control" name="sub_img3" onchange="jQuery(this).next('input').val(this.value);">
																<input type="text" class="form-control" placeholder="no file selected" readonly="">
																<span class="button">Choose Image</span>
															</div>
													</div>
												</div>
											</div>




									</fieldset>
									<div class="row">
										<div class="col-md-12">
											<div class="text-center">
												<button type="submit" class="btn btn-3d btn-primary btn-md">
													사업장정보 수정
												</button>
											</div>
										</div>
									</div>
							</form>

						</div>

					</section>
				</div>
			</div>
			<?php
			include_once('footer.php');
			?>
