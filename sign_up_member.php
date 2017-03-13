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

}
</script>
			<section class="page-header">
				<div class="container text-center">

					<h1>구직자회원 가입</h1>
					<span class="font-lato size-18 weight-300">일자리를 찾고계십니까?<br>
					퀵트라바호에서 함께해보세요</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="form-area">

							<form id="mbFrm" action="<?php echo TR_ACTION_URL; ?>/sign_up_action.php" method="post" enctype="multipart/form-data" onsubmit="return fwrite_submit(this);">
									<fieldset>
										<input type="hidden" name="type_user" value="jobfinder">
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
