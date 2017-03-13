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

			<section class="page-header">
				<div class="container text-center">

					<h1>로그인</h1>
					<span class="font-lato size-18 weight-300">세상에서 가장 쉬운 구인/구직<br>
					퀵트라바호에서 함께해보세요</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="row">

						<!-- LOGIN -->
						<div class="col-md-6 col-sm-6">

							<!-- login form -->
							<form action="<?php echo TR_ACTION_URL; ?>/login_action.php" method="post" class="sky-form boxed">
								<header class="size-18 margin-bottom-20">
									<i class="fa fa-users"></i> Sign In
								</header>

								<fieldset class="nomargin">

									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-envelope"></i>
										<input required="" type="email" placeholder="Email address" name="user_id">
										<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
									</label>

									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-lock"></i>
										<input required="" type="password" placeholder="Password" name="password">
										<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
									</label>

									<div class="clearfix note margin-bottom-30">
										<a class="pull-right" href="#">Forgot Password?</a>
									</div>

									<label class="checkbox weight-300">
										<input type="checkbox" name="keep_login" value="Y">
										<i></i> Keep me logged in
									</label>

								</fieldset>

								<footer>
									<button type="submit" class="btn btn-trabaho pull-right"><i class="fa fa-check"></i> OK, LOG IN</button>
								</footer>

							</form>
							<!-- /login form -->

							<!-- ALERT -->
							<!-- <div class="alert alert-mini alert-danger margin-bottom-30">
								<strong>Oh snap!</strong> Login Incorrect!
							</div> -->
							<!-- /ALERT -->

						</div>
						<!-- /LOGIN -->

						<!-- SOCIAL LOGIN -->
						<div class="col-md-6 col-sm-6">
							<form action="#" method="post" class="sky-form boxed">

								<header class="size-18 margin-bottom-20">
									Sign In using your favourite social network
								</header>

								<fieldset class="nomargin">

									<div class="row">

										<div class="col-md-8 col-md-offset-2">

											<a onclick="facebooklogin();" class="btn btn-block btn-social btn-facebook margin-bottom-10">
												<i class="fa fa-facebook"></i> Sign in with Facebook
											</a>


										</div>
									</div>

								</fieldset>
								<script type="text/javascript" src="<?php echo TR_URL; ?>/lib/fblogin.js"></script>

								<footer>
									Don't have an account yet? <a href="<?php echo TR_URL; ?>/sign_up_type.php"><strong class="size-18">Click to register!</strong></a>
								</footer>

							</form>

						</div>
						<!-- /SOCIAL LOGIN -->

					</div>

					</section>
				</div>
			</div>

			<?php
			include_once('footer.php');
			?>
