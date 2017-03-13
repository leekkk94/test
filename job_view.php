<?php
include_once('common.php');
$og_title = '';
$og_contents = '';
$og_img = '';
include_once('header.php');
?>

<script>
function sendSns(sns, url, txt)
	{
			var o;
			var _url = encodeURIComponent(url);
			var _txt = encodeURIComponent(txt);
			var _br  = encodeURIComponent('\r\n');

			switch(sns)
			{
					case 'facebook':
							o = {
									method:'popup',
									url:'http://www.facebook.com/sharer/sharer.php?u=' + _url
							};
							break;

					case 'twitter':
							o = {
									method:'popup',
									url:'http://twitter.com/intent/tweet?text=' + _txt + '&url=' + _url
							};
							break;
					//
					// case 'me2day':
					// 		o = {
					// 				method:'popup',
					// 				url:'http://me2day.net/posts/new?new_post[body]=' + _txt + _br + _url + '&new_post[tags]=epiloum'
					// 		};
					// 		break;
					//
					// case 'kakaotalk':
					// 		o = {
					// 				method:'web2app',
					// 				param:'sendurl?msg=' + _txt + '&url=' + _url + '&type=link&apiver=2.0.1&appver=2.0&appid=dev.epiloum.net&appname=' + encodeURIComponent('Epiloum 개발노트'),
					// 				a_store:'itms-apps://itunes.apple.com/app/id362057947?mt=8',
					// 				g_store:'market://details?id=com.kakao.talk',
					// 				a_proto:'kakaolink://',
					// 				g_proto:'scheme=kakaolink;package=com.kakao.talk'
					// 		};
					// 		break;
					//
					// case 'kakaostory':
					// 		o = {
					// 				method:'web2app',
					// 				param:'posting?post=' + _txt + _br + _url + '&apiver=1.0&appver=2.0&appid=dev.epiloum.net&appname=' + encodeURIComponent('Epiloum 개발노트'),
					// 				a_store:'itms-apps://itunes.apple.com/app/id486244601?mt=8',
					// 				g_store:'market://details?id=com.kakao.story',
					// 				a_proto:'storylink://',
					// 				g_proto:'scheme=kakaolink;package=com.kakao.story'
					// 		};
					// 		break;
					//
					// case 'band':
					// 		o = {
					// 				method:'web2app',
					// 				param:'create/post?text=' + _txt + _br + _url,
					// 				a_store:'itms-apps://itunes.apple.com/app/id542613198?mt=8',
					// 				g_store:'market://details?id=com.nhn.android.band',
					// 				a_proto:'bandapp://',
					// 				g_proto:'scheme=bandapp;package=com.nhn.android.band'
					// 		};
							break;

					default:
							alert('지원하지 않는 SNS입니다.');
							return false;
			}

			switch(o.method)
			{
					case 'popup':
							window.open(o.url);
							break;

					case 'web2app':
							if(navigator.userAgent.match(/android/i))
							{
									// Android
									setTimeout(function(){ location.href = 'intent://' + o.param + '#Intent;' + o.g_proto + ';end'}, 100);
							}
							else if(navigator.userAgent.match(/(iphone)|(ipod)|(ipad)/i))
							{
									// Apple
									setTimeout(function(){ location.href = o.a_store; }, 200);
									setTimeout(function(){ location.href = o.a_proto + o.param }, 100);
							}
							else
							{
									alert('이 기능은 모바일에서만 사용할 수 있습니다.');
							}
							break;
			}
	}
</script>


			<!-- <section class="page-header">
				<div class="container text-center">

					<h1>쉬운직업검색</h1>
					<span class="font-lato size-18 weight-300">나이, 성별, 셩력, 학력에 상관없는<br>
					쉬운 직업을 검색해 보세요!</span>

				</div>
			</section> -->

			<div class="inner-wrap">

				<!-- -->
				<div class="container">
					<section class="section-box">
						<div class="back-btn-area">
							<a class="back-btn" href="javascript:history.go(-1);">
								<i class="fa fa-arrow-circle-o-left"></i>
							</a>
						</div>
						<div class="view-job">
							<div class="row">

								<!-- IMAGE -->
								<div class="col-lg-6 col-sm-6">

									<div class="thumbnail relative margin-bottom-3">

										<!--
											IMAGE ZOOM

											data-mode="mouseover|grab|click|toggle"
										-->
										<figure id="zoom-primary" class="zoom" data-mode="mouseover">
											<!--
												zoom buttton

												positions available:
													.bottom-right
													.bottom-left
													.top-right
													.top-left
											-->
											<a class="lightbox bottom-right" href="assets/images/demo/shop/products/1000x1500/p5.jpg" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

											<!--
												image

												Extra: add .image-bw class to force black and white!
											-->
											<img class="img-responsive" src="data/company_thumbnail/1.jpg" width="1200" height="1500"  />
										</figure>

									</div>

									<!-- Thumbnails (required height:100px) -->
									<div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured" data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
										<a class="thumbnail active" href="data/company_thumbnail/1.jpg">
											<img src="data/company_thumbnail/1.jpg" height="100" alt="" />
										</a>
										<a class="thumbnail" href="data/company_thumbnail/1.jpg">
											<img src="data/company_thumbnail/1.jpg" height="100" alt="" />
										</a>
										<a class="thumbnail" href="data/company_thumbnail/1.jpg">
											<img src="data/company_thumbnail/1.jpg" height="100" alt="" />
										</a>

									</div>
									<!-- /Thumbnails -->
									<!-- /IMAGE -->
									<!-- Share -->
									<div class="sns_btn_area">

										<a href="#" onclick="sendSns('facebook','http://naver.com','제목입니다');" class="pull-left social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" onclick="sendSns('twitter','http://naver.com','제목입니다');" class="pull-left social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

									</div>
									<!-- /Share -->
								</div>


								<!-- ITEM DESC -->
								<div class="col-lg-6 col-sm-6">
									<div class="job_view_main">

										<div class="infoJob">
											<!-- 기본정보 -->
											<div class="infoTerm">
												<h3>마닐라 헤리티지호텔 호텔카지노 딜러채용</h3>
												<h4>마닐라 헤리티지 호텔</h4>

												<ul class="info">
													<li class=""><span class="item">일종류</span> 계산원</li>
													<li class=""><span class="item">근무지역</span> 필리핀 마닐라 스트릿로 1234</li>
													<li class=""><span class="item">담당자</span> 이동욱</li>
													<li class=""><span class="item">H.P</span> <a href="tel:123-4567-1234"> 123-4567-1234</a></li>
													<li class=""><span class="item">대표번호</span> <a href="tel:1234-5678">1234-5678</a></li>
													<li class=""><span class="item">E-mail</span> <a href="mailto:test@testmail.com">test@testmail.com</a></li>
													<li class=""><span class="item">homepage</span> <a href="http://naver.com">http://naver.com</a></li>
													<hr>
													<li class=""><span class="item">성별</span> 상관없음</li>
													<li class=""><span class="item">나이</span> 19~32 세</li>
													<li class=""><span class="item">학력</span> 고졸이상</li>
													<li class=""><span class="item">경력</span>있으면 우대</li>

												</ul>
											</div>
											<!-- //기본정보 -->

										</div>
										<div class="btn-area">

											<div class="col-xs-6">
												<a href="#" class="btn btn-3d btn-primary btn-lg btn-block">
													<i class="fa fa-external-link"></i>
													<div>
														이력서 제출
													</div>
												</a>
											</div>
											<div class="col-xs-6">
												<a href="#" class="btn btn-3d btn-default btn-lg btn-block">
													<i class="fa fa-star-o"></i>
													<div>
														북마크에 추가
													</div>
												</a>
											</div>
										</div>


									</div>
								</div>
								<!-- /ITEM DESC -->

							</div>


							<div class="row">
								<div class="col-md-12">
									<hr />
									<div class="infoJob">
										<!-- 기본정보 -->
										<div class="infoTerm">
											<h4>업무내용 및 근무조건</h4>
											<ul class="info">
												<li class=""><span class="item">채용마감일</span> 2017-02-08</li>
												<li class=""><span class="item">모집인원</span> 00명</li>
												<li class=""><span class="item">급여</span> 350만 ~ 450만</li>
												<li class=""><span class="item">근무요일</span> 월,화,수,목</li>
												<li class=""><span class="item">근무시간</span> 12:00 ~ 20:00</li>
											</ul>
											<hr>
											<h4>근무지역</h4>
											<ul class="info">
												<li class=""><span class="item">근무지역</span> 필리핀 마닐라로 132-21</li>
												<li class=""><span class="item">지도</span></li>
											</ul>
											<!--
											Available heights
												height-100
												height-150
												height-200
												height-250
												height-300
												height-350
												height-400
												height-450
												height-500
												height-550
												height-600
											-->
											<div id="map" class="height-300"></div>
										    <script>


												function initMap() {
													var map = new google.maps.Map(document.getElementById('map'), {
														center: {lat: -33.866, lng: 151.196},
														zoom: 15
													});

													var infowindow = new google.maps.InfoWindow();
													var service = new google.maps.places.PlacesService(map);

													service.getDetails({
														placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
													}, function(place, status) {
														if (status === google.maps.places.PlacesServiceStatus.OK) {
															var marker = new google.maps.Marker({
																map: map,
																position: place.geometry.location
															});
															google.maps.event.addListener(marker, 'click', function() {
																infowindow.setContent(place.name);
																infowindow.open(map, this);
															});
														}
													});
												}

										    </script>

											<!-- //기본정보 -->


										</div>
										<hr>
										<!-- 상세정보 -->
										<div class="infoTerm">
											<h4>상세채용정보</h4>
											<p>상세근무조건 내용입니다.</p>
												<div class="col-md-2 col-md-offset-10">
													<a href="#" class="btn btn-3d btn-default btn-sm btn-block">
														목록으로
													</a>
											</div>
										</div>
										<!-- //상세정보 -->


									</div>
								</div>
							</div>
						</div>
					</section>




				</div>
			</div>
<?php
include_once('footer.php');
 ?>
