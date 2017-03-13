<?php
include_once('common.php');
include_once('header.php');
?>
			<section class="page-header">
				<div class="container text-center">

					<h1>회원가입</h1>
					<span class="font-lato size-18 weight-300">세상에서 가장 쉬운 구인/구직<br>
					퀵트라바호에서 함께해보세요</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="form-area">

							<form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right" novalidate="novalidate">
									<fieldset>
										<!-- required [php action request] -->
										<input type="hidden" name="action" value="contact_send">

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Type *</label>
													<label class="radio">
														<input type="radio" name="radio-btn" value="1" <?php echo 'checked="checked"'; ?>>
														<i></i> 일반회원
													</label>
													<label class="radio">
														<input type="radio" name="radio-btn" value="2">
														<i></i> 일반회원
													</label>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>Email *</label>
													<input type="email" name="contact[email]" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Password *</label>
													<input type="password" name="contact[phone]" value="" class="form-control required">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>First Name *</label>
													<input type="text" name="contact[first_name]" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Last Name *</label>
													<input type="text" name="contact[last_name]" value="" class="form-control required">
												</div>
											</div>
										</div>



										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Position *</label>
													<select name="contact[position]" class="form-control pointer required">
														<option value="">--- Select ---</option>
														<option value="Marketing">PR &amp; Marketing</option>
														<option value="Developer">Web Developer</option>
														<option value="php">PHP Programmer</option>
														<option value="Javascript">Javascript Programmer</option>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>Expected Salary *</label>
													<input type="text" name="contact[expected_salary]" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Start Date *</label>
													<input type="text" name="contact[start_date]" value="" class="form-control datepicker required" data-format="yyyy-mm-dd" data-lang="en" data-rtl="false">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Experience *</label>
													<textarea name="contact[experience]" rows="4" class="form-control required"></textarea>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>
														Website
														<small class="text-muted">- optional</small>
													</label>
													<input type="text" name="contact[website]" placeholder="http://" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>
														File Attachment
														<small class="text-muted">Curriculum Vitae - optional</small>
													</label>

													<!-- custom file upload -->
													<div class="fancy-file-upload fancy-file-primary">
														<i class="fa fa-upload"></i>
														<input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);">
														<input type="text" class="form-control" placeholder="no file selected" readonly="">
														<span class="button">Choose File</span>
													</div>
													<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

												</div>
											</div>
										</div>

									</fieldset>

									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
												SEND APPLICATION
												<span class="block font-lato">We'll get back to you within 48 hours</span>
											</button>
										</div>
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
