<?php
include_once('common.php');
include_once('header.php');
?>
			<section class="page-header page-header-xs">
				<div class="container text-center">

					<h1>고객센터</h1>
					<span class="font-lato size-18 weight-300">퀵트라바호에<br>
					궁금하시거나 바라시는점이 있으신가요? 도움을 드리겠습니다.</span>
					<ul class="page-header-tabs list-inline">
						<li><a href="<?php echo TR_URL; ?>/notice.php">Notice</a></li>
						<li><a href="<?php echo TR_URL; ?>/faq.php">FAQ</a></li>
						<li class="active"><a href="<?php echo TR_URL; ?>/inquiry.php">Inquiry</a></li>

					</ul>
				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="row">

						<!-- FORM -->
						<div class="col-md-12">




							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<form action="php/contact.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<input type="hidden" name="action" value="contact_send">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="title"  for="contact:name">Full Name *</label>
												<input required="" type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="title"  for="contact:email">E-mail *</label>
												<input required="" type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="title"  for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="title" for="contact:attachment">File Attachment</label>

												<!-- custom file upload -->
												<div class="input-group">
													<input class="custom-file-upload custom-file-upload-hidden" type="file" id="file" name="contact[attachment]" data-btn-text="Select a File" tabindex="-1" style="position: absolute; left: -9999px;">
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>
												</div>
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="title" for="contact:message">Message *</label>
												<textarea required="" maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>


								</fieldset>

								<div class="text-center">
									<button type="submit" class="btn btn-3d btn-search btn-md ">
										SEND MESSAGE
									</button>
								</div>
							</form>

						</div>
						<!-- /FORM -->


					</div>

					</section>
				</div>
			</div>
			<?php
			include_once('footer.php');
			?>
