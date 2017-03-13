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

					<h1>회원가입 종류</h1>
					<span class="font-lato size-18 weight-300">세상에서 가장 쉬운 구인/구직<br>
					퀵트라바호에서 함께해보세요</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">
						<div class="section-title">

							<h3>회원타입 선택</h3>
							<p>가입하실 회원 종류를 선택해주세요</p>
						</div>
						<div class="user-type-area">
							<div class="row">

								<div class="col-xs-6">
									<a href="<?php echo TR_URL; ?>/sign_up_member.php">
										<div class="user-type-item">
											<span class="user-type-icon">
												<i class="fa fa-black-tie"></i>
											</span>
											<h3>구직자회원</h3>
											<p>기업이 아닌 일반인으로,<br>
												직장을 구하고있는 일반인 입니다.
											</p>
										</div>
									</a>
								</div>

								<div class="col-xs-6">
									<a href="<?php echo TR_URL; ?>/sign_up_company.php">
										<div class="user-type-item">
											<span class="user-type-icon"><i class="fa fa-building"></i></span>
											<h3>기업회원</h3>
											<p>사업장을 운영하고 있으며,<br>
												인력이 필요한 사업자 입니다.
											</p>
										</div>
									</a>
								</div>


							</div>
						</div>


						<div class="section-title">

							<h3>회원가입 약관</h3>
							<p>가입하실 회원종류를 선택하시면 terms &amp; conditions, privacy에 동의한것으로 간주됩니다.</p>
						</div>
						<pre>회원가입 약관입니다.
						</pre>



					</section>



				</div>
			</div>

			<?php
			include_once('footer.php');
			 ?>
