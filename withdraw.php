<?php
include_once('common.php');
include_once('header.php');
?>


			<section class="page-header page-header-xs">
				<div class="container text-center">

					<h1>환경설정</h1>
					<ul class="page-header-tabs list-inline">
						<li><a href="<?php echo TR_URL; ?>/setting_user.php">공개범위설정</a></li>
						<li><a href="<?php echo TR_URL; ?>/change_password.php">비밀번호 변경</a></li>
						<li class="active"><a href="<?php echo TR_URL; ?>/withdraw.php">회원탈퇴</a></li>
					</ul>
				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">
						<h4 class="margin-bottom-30">탈퇴안내</h4>

						<h5><i class="fa fa-check" style="color:#390;"></i>사용하고 계신 아이디(<span>test</span>)는 탈퇴할 경우 재사용 및 복구가 불가합니다.</h5>
						<p>탈퇴한 아이디는 본인과 타인 모두 재사용 및 복구가 불가 하오니 신중하게 선택하시기 바랍니다.</p>

						<h5><i class="fa fa-check" style="color:#390;"></i>탈퇴 후 회원정보 및 개인형 서비스 이용기록은 모두 삭제됩니다.</h5>
						<p>회원정보 및 메일, 블로그, 주소록 등 개인형 서비스 이용기록은 모두 삭제되며, 삭제된 데이터는 복구되지 않습니다.
							삭제되는 내용을 확인하시고 필요한 데이터는 미리 백업을 해주세요.</p>
						<hr>
						<form name="fm" method="post" action="action/withdraw_update.php">
							<div class="margin-bottom-30">
								<label class="checkbox">
										<input type="checkbox" name="drawAgree" value="Y">
										<i></i>해당 내용에 동의하며, 회원 탈퇴하기를 원합니다.
								</label>
							</div>
							<div class="text-center">
								<a id="btnNext" href="#" class="btn btn-3d btn-default btn-md">확인</a>
							</div>
						</form>
					</section>
				</div>
			</div>


			<?php
			include_once('footer.php');
			?>
