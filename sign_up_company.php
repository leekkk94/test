<?php
require_once('lib/startsession.php');
include_once('common.php');
if (isset($_SESSION['user_id'])) {
	$home_url =  TR_URL.'/index.php';
	goto_url($home_url);
	exit;
}
include_once('header.php');
?>
<script>
function fwrite_submit(f){

	if(!f.user_id.value)
	{
		alert("'Email' is mandatory.");
		$("#user_id").focus();
		return false;
	}


	if(f.pwd.value != f.pwdRe.value)
	{
		alert("The password is invalid.");
	$("#pwd").focus();
			return false;
	}

	if(!f.first_name.value)
	{
		alert("'First Name' is mandatory.");
		$("#firstName").focus();
		return false;
	}
	if(!f.last_name.value)
	{
		alert("'Last Name' is mandatory.");
		$("#lastName").focus();
		return false;
	}
	if(!f.company_name.value)
	{
		alert("'Company Name' is mandatory.");
		$("#companyName").focus();
		return false;
	}
	if(!f.main_img.value)
	{
		alert("'Main image' is mandatory.");
		$("#mainImg").focus();
		return false;
	}
	if(!f.adress.value)
	{
		alert("'Adress' is mandatory.");
		$("#adress").focus();
		return false;
	}

}
</script>
			<section class="page-header">
				<div class="container text-center">

					<h1>기업회원 가입</h1>
					<span class="font-lato size-18 weight-300">아직도 인력을 구하지못하셔서 고민이신가요?<br>
					퀵트라바호에서 구해보세요!</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="form-area">

							<form id="mbFrm" action="<?php echo TR_ACTION_URL; ?>/sign_up_action.php" method="post" enctype="multipart/form-data" onsubmit="return fwrite_submit(this);">
									<fieldset>
										<input type="hidden" name="type_user" value="company">
										<input type="hidden" name="type_sign" value="general">

										<div class="form-group">
												<label class="title">E-mail</label>
												<input type="email" name="user_id" value="" class="form-control required" onblur="isEmail(this.value);">
												<span id="emailResult">
													<p class="help-block">※ 로그인 시 아이디로 사용됩니다. </p>
												</span>
										</div>

										<div class="form-group">
												<label class="title">Create a password</label>
												<input type="password" name="password" id="pwd" value="" class="form-control required" onblur="pwEqual();">
												<span id="pwResult1">
													<p class="help-block">※ 6 characters minimum </p>
												</span>
										</div>
										<div class="form-group">
												<label class="title">Confirm your password</label>
												<input type="password" name="password_re" id="pwdRe" value="" class="form-control required" onblur="pwEqual();">
												<span id="pwResult2">
													<p class="help-block">※ 6 characters minimum </p>
												</span>
										</div>
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="form-group">

													<label class="title">First Name</label>
													<input type="text" name="first_name" id="firstName" value="" class="form-control required">
												</div>
											</div>

											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<label class="title">Last Name</label>
													<input type="text" name="last_name" value="" id="lastName" class="form-control required">
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-md-12 text-center">
												<hr>
												<h4>사업장정보</h4>
												<hr>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="title">외국인회사 여부</label>

													<label class="checkbox">
															<input type="checkbox" name="foreign_company" value="Y">
															<i></i> 외국인회사일경우 체크해주세요
													</label>
												</div>

											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
														<label class="title required">사업장명</label>
														<input type="text" name="company_name" id="companyName" value="" class="form-control required">
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
															<input type="text" name="adress" id="adress" value="" class="form-control required">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title required">대표번호</label>
															<input type="tel" name="tel" id="tel" value="" class="form-control required">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
															<label class="title">홈페이지</label>
															<input type="text" name="homepage" value="" class="form-control required">
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
											<button type="submit" class="btn btn-3d btn-trabaho btn-xlg btn-block margin-top-30">
												SIGN UP
											</button>
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
