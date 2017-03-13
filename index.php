<?php
include_once('common.php');
include_once('header.php');

?>


			<!-- -->
			<section class="main-banner" style="background:url('assets/images/main_banner.jpg');background-position:center;">
				<div class="text-center ">
					<h2 class="nomargin size-50 wow fadeInUp text-white" data-wow-delay="0.4s">All SIMPLE JOBS IN THE</h2>
					<h1 class="nomargin size-100 wow fadeInUp" data-wow-delay="0.7s"><span>PHILIPPINES</span></h1>
					<p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="1.1s"><span class="theme-color weight-400 font-style-italic text-white">We are quick and simple</span></p>
					<div class="btn-area">
						<div class="col-md-6 col-md-offset-3">
							<a href="<?php echo TR_URL; ?>/job_search_eazy.php" class="btn btn-3d btn-xlg btn-main-eazyjob wow fadeInUp" data-wow-delay="1.6s">
							<i class="fa fa-search"></i>쉬운채용검색
							<div>
								<span class="font-lato">나이, 성별, 경력, 학력에 상관없는 쉬운 직업을 검색 해보세요</span>
							</div>
							</a>
						</div>
						<div class="col-xs-12">
							<div class="sub-btn-area">
								<a href="<?php echo TR_URL; ?>/job_search_total.php" class="btn btn-3d btn-white btn-main-sub wow fadeInUp" data-wow-delay="2.0s"><i class="fa fa-arrow-circle-o-right"></i>맞춤채용검색</a>

								<a href="#" class="btn btn-3d btn-white btn-main-sub wow fadeInUp" data-wow-delay="2.0s" data-toggle="modal" data-target="#popModal" data-whatever="지역검색" data-url="include/location_picker.php"><i class="fa fa-map-marker"></i>지역검색</a>
							</div>
						</div>
					</div>
				</div>
				<div style="clear:both;">
				</div>
				<!-- <div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container text-center">





						</div>

					</div>
				</div> -->

			</section>
			<!-- -->


			<section id="second-btn-section">
				<h3>조건별 구인</h3>
				<div class="container">
					<div class="row">
						<div class="second-btn-area">
							<div class="col-md-4">
								<a href="<?php echo TR_URL; ?>/job_search_urgent.php" class="btn btn-sub btn-sub-1">
									긴급채용검색
								<div>
									<span class="font-lato">긴급하게 인력을 구하는 직업을 검색합니다.</span>
								</div>
								</a>
							</div>

							<div class="col-md-4">
								<a href="<?php echo TR_URL; ?>/job_search_foreign.php" class="btn btn-sub btn-sub-3">
									외국인회사 검색
								<div>
									<span class="font-lato">외국인 회사의 구인을 검색합니다.</span>
								</div>
								</a>
							</div>

							<div class="col-md-4">
								<a href="<?php echo TR_URL; ?>/job_search_normal.php" class="btn btn-sub btn-sub-2">
									일반채용검색
								<div>
									<span class="font-lato">쉬운직업 이외의 조건이 있는 모든 일을 검색합니다.</span>
								</div>
								</a>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- -->


			<?php
			if($mb['type_user'] == "company"){
				include_once('latest_user.php');
			}
			else{
				include_once('latest_company.php');
			}

			?>


			<!--
				.box-pink
				.box-blue
				.box-orange
				.box-yellow
				.box-purple
				.box-red
				.box-brown
				.box-green
				.box-black
				.box-gray
				.box-teal
			-->
			<div id="infographic" class="row box-gradient box-yellow">
				<div class="col-xs-4 col-sm-4">
					<i class="fa fa-child fa-4x"></i>
					<h2 class="countTo font-raleway" data-speed="3000">8165</h2>
					<h4>오늘 방문자 수</h4>
				</div>

				<div class="col-xs-4 col-sm-4">
					<i class="fa fa-building fa-4x"></i>
					<h2 class="countTo font-raleway" data-speed="3000">1033</h2>
					<h4>등록된 채용정보</h4>
				</div>

				<div class="col-xs-4 col-sm-4">
					<i class="fa fa-black-tie fa-4x"></i>
					<h2 class="countTo font-raleway" data-speed="3000">24567</h2>
					<h4>등록된 이력서</h4>
				</div>

			</div>


			<!-- -->
			<section id="get-mobile-section" class="padding-md parallax parallax-2" style="background: url('assets/images/get-mobile-section.jpg') no-repeat;background-size:cover;">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">
					<div class="col-md-6 col-sm-6">
						<div class="phone-img">
							<img class="img-responsive wow fadeIn animated" data-wow-delay="0.6s" src="assets/images/get-mobile.png" alt="" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
							<div class=" wow fadeIn animated" data-wow-delay="1.0s">
								<header class="margin-bottom-30">
									<h3 class="size-35">Get J App for your mobile</h3>
								</header>

								<p>Now you can find job matched
								your career expectation,
								apply for jobs and receive
								feedback right on your mobile.
								Get mobile app and start your
								job search now!</p>
							</div>
							<div class="download-btn-area  wow fadeIn animated" data-wow-delay="1.4s">
		          	<!-- <a href="#" title="Download from App Store" class="btn-appstore">App Store</a> -->
		            <a href="#" title="Download from Play Store" class="btn-playstore">Play Store</a>
		          </div>
					</div>



				</div>
			</section>

			<?php
			include_once('footer.php');
			?>
