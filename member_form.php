<?php
include_once('common.php');
include_once('header.php');
?>
			<section class="page-header">
				<div class="container text-center">

					<h1>이력서관리</h1>
					<span class="font-lato size-18 weight-300">퀵트라바호를 통해<br>
					자신의 이력을 알려주세요!</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="form-area">

							<form class="validate margin-top-30" action="php/contact.php" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
									<fieldset>
										<!-- required [php action request] -->
										<input type="hidden" name="action" value="contact_send">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="form-group">

													<label class="title required">First Name</label>
													<input type="text" name="#" value="" class="form-control required">
												</div>
											</div>

											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<label class="title required">Last Name</label>
													<input type="text" name="#" value="" class="form-control required">
												</div>
											</div>
										</div>

										<div class="form-group">
												<label class="title required">E-mail</label>
												<input type="email" name="contact[email]" value="" class="form-control required">
												<p class="help-block">※ 로그인 시 아이디로 사용됩니다. </p>
										</div>

										<div class="row">

											<div class="col-md-6">
												<div class="form-group">
													<label class="title required">성별</label>

													<label class="radio">
														<input type="radio" name="radio-btn" value="1">
														<i></i> 남자
													</label>
													<label class="radio">
														<input type="radio" name="radio-btn" value="2">
														<i></i> 여자
													</label>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="title required">생년월일</label>
														<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" data-lang="en" data-rtl="false">
												</div>
											</div>

										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
														<label class="title required">프로필사진</label>
														<div class="fancy-file-upload fancy-file-primary">
															<i class="fa fa-upload"></i>
															<input type="file" class="form-control" name="picture" onchange="jQuery(this).next('input').val(this.value);">
															<input type="text" class="form-control" placeholder="no file selected" readonly="">
															<span class="button">Choose File</span>
														</div>
														<p class="help-block">※ Max file size: 10Mb (jpg/jpeg/png) </p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
														<label class="title required">주소</label>
														<input type="text" name="#" value="" class="form-control required">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
														<label class="title required">연락처</label>
														<input type="tel" name="#" value="" class="form-control required" placeholder="0123-456-7890">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
														<label class="title required">Facebook ID</label>
														<input type="text" name="#" value="" class="form-control required">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="title">경력</label>
													<div class="select-wrapper">
														<select name="" class="form-control pointer required">
															<option value="없음">없음</option>
															<option value="month">month</option>
															<option value="1year">1year</option>
														</select>
							            </div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="title">학력</label>
													<div class="select-wrapper">
														<select name="" class="form-control pointer required">
															<option value="">없음</option>
															<option value="초졸">초졸</option>
															<option value="중졸">중졸</option>
														</select>
							            </div>

												</div>
											</div>
										</div>





										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="title">자기소개</label>
													<div class="fancy-form"><!-- textarea -->
														<div class="fancy-form">
															<textarea rows="5" class="form-control word-count" data-maxlength="1000" data-info="textarea-words-info" placeholder="Textarea..."></textarea>

															<span class="fancy-hint size-11 text-muted">
																<strong>Hint:</strong> 1000 words allowed!

															</span>

														</div>

													</div>

												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 text-center">
												<hr>
												<h4>희망조건</h4>
												<p>희망조건을 토대로 인재정보에 이력서가 노출됩니다.</p>
												<hr>
											</div>
										</div>



										<?php include_once('default_sort.php');?>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
														<label class="title">희망최소급여</label>
														<div class="input-group">
									            <input id="custIncomeTtamt" name="custIncomeTtamt" min="0" max="99999" placeholder="0" type="number" class="form-control text-right" value="" maxlength="5" autocomplete="off">
									            <div class="input-group-addon">peso</div>
									          </div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
														<label class="title">협의가능여부</label>
														<label class="checkbox">
																<input type="checkbox" name="check1" value="1">
																<i></i> 협의 가능일시 체크해주세요
														</label>
												</div>
											</div>
										</div>

									</fieldset>
									<div class="text-center">
										<button type="submit" class="btn btn-3d btn-primary btn-md">
											이력서 수정
										</button>
									</div>
								<input type="hidden" name="is_ajax" value="true">
							</form>

						</div>

					</section>
				</div>
			</div>
			<?php
			include_once('footer.php');
			?>
