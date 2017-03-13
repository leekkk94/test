<?php
include_once('common.php');
include_once('header.php');
?>
			<section class="page-header page-header-xs">
				<div class="container text-center">

					<h1>환경설정</h1>
					<ul class="page-header-tabs list-inline">
						<li class="active"><a href="<?php echo TR_URL; ?>/setting_user.php">공개범위설정</a></li>
						<li><a href="<?php echo TR_URL; ?>/change_password.php">비밀번호 변경</a></li>
						<li><a href="<?php echo TR_URL; ?>/withdraw.php">회원탈퇴</a></li>
					</ul>
				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="panel panel-default">
							<div class="panel-heading panel-heading-transparent">
								<h2 class="panel-title bold">공개범위 설정</h2>
							</div>

							<div class="panel-body">

								<div class="margin-bottom-30">
									<label class="switch switch-success switch-round">
										<input type="checkbox" checked="">
										<span class="switch-label" data-on="YES" data-off="NO"></span>
										<span>채용자들이 인력정보 리스트에서 자신의 이력서를 볼 수 있게 공개합니다</span>
									</label>
								</div>

								<div class="margin-bottom-30">
									<label class="switch switch-success switch-round">
										<input type="checkbox" checked="">
										<span class="switch-label" data-on="YES" data-off="NO"></span>
										<span>E-mail 수신 및 개인정보 활용에 동의합니다</span>
									</label>
								</div>


							</div>

							<div class="panel-footer">


							</div>
						</div>
						<div class="text-center">
							<a href="#" class="btn btn-3d btn-primary btn-md">설정변경</a>
						</div>
					</section>
				</div>
			</div>
			<?php
			include_once('footer.php');
			?>
