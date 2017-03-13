<?php
include_once('common.php');
include_once('header.php');
?>

			<section class="page-header">
				<div class="container text-center">

					<h1>쉬운직업검색</h1>
					<span class="font-lato size-18 weight-300">나이, 성별, 셩력, 학력에 상관없는<br>
					쉬운 직업을 검색해 보세요!</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<!-- <div class="easy-job-sort">
							<h4>쉬운검색조건</h4>
							<p>최소 한가지 이상의 조건을 선택하셔야 검색 가능합니다.</p>
							<div class="row check-area">
								<div class="col-md-3 col-xs-6">
									<label class="checkbox">
											<input type="checkbox" name="check1" value="1" checked="checked">
											<i></i> 성별무관
									</label>
								</div>
								<div class="col-md-3 col-xs-6">
									<label class="checkbox">
											<input type="checkbox" name="check1" value="1" checked="checked">
											<i></i> 연령무관
									</label>
								</div>
								<div class="col-md-3 col-xs-6">
									<label class="checkbox">
											<input type="checkbox" name="check1" value="1" checked="checked">
											<i></i> 경력무관
									</label>
								</div>
								<div class="col-md-3 col-xs-6">
									<label class="checkbox">
											<input type="checkbox" name="check1" value="1" checked="checked">
											<i></i> 학력무관
									</label>
								</div>
							</div>
						</div> -->

						<div class="default-sort">
							<div class="row">

								<div class="col-md-6">
									<h4>지역</h4>
									<div class="location">
		                  <div class="ltBx">
		                      <ul id="#" class="mCustomScrollbar"	data-mcs-theme="dark">
														<div id="#" class="mCustomScrollBox " tabindex="0" style="max-height: none;">
														<div id="#" class="mCSB_container"  dir="ltr">
		                          <!--// 선택된 항목 on 클래스 적용-->

		                              <li><a href="#" onclick="">Mountain Province</a></li>
		                              <li><a href="#" onclick="">North Samar</a></li>
																	<li><a href="#" onclick="">Zamboanga del Sur</a></li>
																	<li><a href="#" onclick="">Mountain Province</a></li>
		                              <li><a href="#" onclick="">North Samar</a></li>
																	<li><a href="#" onclick="">Zamboanga del Sur</a></li>
																	<li><a href="#" onclick="">Mountain Province</a></li>
		                              <li><a href="#" onclick="">North Samar</a></li>
																	<li><a href="#" onclick="">Zamboanga del Sur</a></li>
		                      	</div>

													</div>
												</ul>
		                  </div>
											<div class="rtBx">
                            <ul id="#" class="mCustomScrollbar testBar"	data-mcs-theme="dark">
															<div id="#" class="mCustomScrollBox testBar" tabindex="0" style="max-height: none;">
																<div id="#" class="mCSB_container"  dir="ltr">
																	<li class="on"><a href="#" onclick="">Zamboanguita</a></li>
																	<li class=""><a href="#" onclick="">Lope De Vega</a></li>
																	<li class=""><a href="#" onclick="">General Mamerto Natividad</a></li>
																	<li class=""><a href="#" onclick="">Alfonso Castaneda</a></li>
																	<li class=""><a href="#" onclick="">Sofronio Espanola</a></li>
																	<li class=""><a href="#" onclick="">Lambayong(Mariano Marcos)</a></li>
																</div>
															</div>
														</ul>
                      </div>
		              </div>
								</div>

								<div class="col-md-6">
									<h4>업종</h4>
									<div class="type">
		                  <div class="ltBx">
		                      <ul id="#" class="mCustomScrollbar"	data-mcs-theme="dark">
														<div id="#" class="mCustomScrollBox " tabindex="0" style="max-height: none;">
														<div id="#" class="mCSB_container"  dir="ltr">
		                          <!--// 선택된 항목 on 클래스 적용-->

                              <li><a href="#" onclick="">업종1</a></li>
															<li><a href="#" onclick="">업종2</a></li>
															<li><a href="#" onclick="">업종3</a></li>
															<li><a href="#" onclick="">업종4</a></li>
															<li><a href="#" onclick="">업종5</a></li>
															<li><a href="#" onclick="">업종6</a></li>
															<li><a href="#" onclick="">업종7</a></li>

		                      	</div>

													</div>
												</ul>
		                  </div>
											<div class="rtBx">
                            <ul id="#" class="mCustomScrollbar"	data-mcs-theme="dark">
															<div id="#" class="mCustomScrollBox" tabindex="0" style="max-height: none;">
																<div id="#" class="mCSB_container"  dir="ltr">
																	<li class="on"><a href="#" onclick="">전체</a></li>
																	<li class=""><a href="#" onclick="">업종상세1</a></li>
																	<li class=""><a href="#" onclick="">업종상세2</a></li>
																	<li class=""><a href="#" onclick="">업종상세3</a></li>
																	<li class=""><a href="#" onclick="">업종상세4</a></li>
																	<li class=""><a href="#" onclick="">업종상세5</a></li>
																	<li class=""><a href="#" onclick="">업종상세6</a></li>
																</div>
															</div>
														</ul>
                      </div>
		              </div>
								</div>

								<div class="col-md-6 col-md-offset-3">
											<button type="submit" class="btn btn-3d btn-search btn-lg btn-block margin-top-30">
												Search
											</button>
								</div>




							</div>

						</div>

					</section>
					<section class="section-box">
						<div class="page-header">
							<div class="page-header-title">
				        <h4>채용정보<span>총 301건</span></h4>
							</div>
							<div class="page-header-sort">
								<div class="select-wrapper">
		              <select class="form-control">
		                <option value="">정렬기준</option>
		                <option value="1">이름</option>
		              </select>
		            </div>
							</div>
				    </div>

						<!-- 채용각개 -->
						<div class="search-result-item1">
							<a href="#">
								<div class="search-result-thumb">
									<img class="rounded" src="data/company_thumbnail/1.jpg" alt="">
								</div>
								<div class="search-result-content">
									<span class="company">마닐라 헤리티지 호텔</span>
									<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
									<span class="location">필리핀 마닐라 스트릿로</span>
									<span class="info">
										<span class="age">연령무관</span>
										<span class="sex">성별무관</span>
										<span class="career">경력무관</span>
										<span class="edu">학력무관</span>
										<span class="pay">500peso</span>
									</span>
								</div>
								<div class="search-result-bookmark">
									<div class="bookmark-icon">
										<a href="#">
											<i class="fa fa-star-o"></i>
										</a>
									</div>
								</div>
							</a>
						</div>
						<!-- 채용각개 -->
						<div class="search-result-item1">
							<a href="#">
								<div class="search-result-thumb">
									<img class="rounded" src="data/company_thumbnail/1.jpg" alt="">
								</div>
								<div class="search-result-content">
									<span class="company">마닐라 헤리티지 호텔</span>
									<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
									<span class="location">필리핀 마닐라 스트릿로</span>
									<span class="info">
										<span class="age">연령무관</span>
										<span class="sex">성별무관</span>
										<span class="career">경력무관</span>
										<span class="edu">학력무관</span>
										<span class="pay">500peso</span>
									</span>
								</div>
								<div class="search-result-bookmark">
									<div class="bookmark-icon">
										<a href="#">
											<i class="fa fa-star-o"></i>
										</a>
									</div>
								</div>
							</a>
						</div>
						<!-- 채용각개 -->
						<div class="search-result-item1">
							<a href="#">
								<div class="search-result-thumb">
									<img class="rounded" src="data/company_thumbnail/1.jpg" alt="">
								</div>
								<div class="search-result-content">
									<span class="company">마닐라 헤리티지 호텔</span>
									<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
									<span class="location">필리핀 마닐라 스트릿로</span>
									<span class="info">
										<span class="age">연령무관</span>
										<span class="sex">성별무관</span>
										<span class="career">경력무관</span>
										<span class="edu">학력무관</span>
										<span class="pay">500peso</span>
									</span>
								</div>
								<div class="search-result-bookmark">
									<div class="bookmark-icon">
										<a href="#">
											<i class="fa fa-star-o"></i>
										</a>
									</div>
								</div>
							</a>
						</div>
						<!-- 채용각개 -->
						<div class="search-result-item1">
							<a href="#">
								<div class="search-result-thumb">
									<img class="rounded" src="data/company_thumbnail/1.jpg" alt="">
								</div>
								<div class="search-result-content">
									<span class="company">마닐라 헤리티지 호텔</span>
									<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
									<span class="location">필리핀 마닐라 스트릿로</span>
									<span class="info">
										<span class="age">연령무관</span>
										<span class="sex">성별무관</span>
										<span class="career">경력무관</span>
										<span class="edu">학력무관</span>
										<span class="pay">500peso</span>
									</span>
								</div>
								<div class="search-result-bookmark">
									<div class="bookmark-icon">
										<a href="#">
											<i class="fa fa-star-o"></i>
										</a>
									</div>
								</div>
							</a>
						</div>
						<!-- 채용각개 -->
						<div class="search-result-item1">
							<a href="#">
								<div class="search-result-thumb">
									<img class="rounded" src="data/company_thumbnail/1.jpg" alt="">
								</div>
								<div class="search-result-content">
									<span class="company">마닐라 헤리티지 호텔</span>
									<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
									<span class="location">필리핀 마닐라 스트릿로</span>
									<span class="info">
										<span class="age">연령무관</span>
										<span class="sex">성별무관</span>
										<span class="career">경력무관</span>
										<span class="edu">학력무관</span>
										<span class="pay">500peso</span>
									</span>
								</div>
								<div class="search-result-bookmark">
									<div class="bookmark-icon">
										<a href="#">
											<i class="fa fa-star-o"></i>
										</a>
									</div>
								</div>
							</a>
						</div>


						<div class="pagination-area">
							<ul class="pagination pagination-simple pagination-sm">
								<li><a href="#">«</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div>



						<div class="page-header">
							<div class="page-header-title">
				        <h4>실시간 추천 채용정보</h4>
							</div>
				    </div>
						<div class="best-result-list">

							<!-- 실시간 추천 채용정보 각개-->
							<div class="col-md-3 col-xs-12">
								<div class="best-result-item">
									<div class="best-item-bookmark">
										<div class="bookmark-icon">
											<a href="#">
												<i class="fa fa-star-o"></i>
											</a>
										</div>
									</div>
									<a href="#">
										<div class="best-item-content">
											<span class="company">마닐라 헤리티지 호텔</span>
											<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
											<!-- <span class="location">필리핀 마닐라 스트릿로</span> -->
											<span class="info">
												<span class="pay">500peso</span>
											</span>
											<span class="date">
												17.06.05 까지
											</span>
										</div>
									</a>
								</div>
							</div>
							<!--  -->
							<!-- 실시간 추천 채용정보 각개-->
							<div class="col-md-3 col-xs-12">
								<div class="best-result-item">
									<div class="best-item-bookmark">
										<div class="bookmark-icon">
											<a href="#">
												<i class="fa fa-star-o"></i>
											</a>
										</div>
									</div>
									<a href="#">
										<div class="best-item-content">
											<span class="company">마닐라 헤리티지 호텔</span>
											<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
											<!-- <span class="location">필리핀 마닐라 스트릿로</span> -->
											<span class="info">
												<span class="pay">500peso</span>
											</span>
											<span class="date">
												17.06.05 까지
											</span>
										</div>
									</a>
								</div>
							</div>
							<!--  -->
							<!-- 실시간 추천 채용정보 각개-->
							<div class="col-md-3 col-xs-12">
								<div class="best-result-item">
									<div class="best-item-bookmark">
										<div class="bookmark-icon">
											<a href="#">
												<i class="fa fa-star-o"></i>
											</a>
										</div>
									</div>
									<a href="#">
										<div class="best-item-content">
											<span class="company">마닐라 헤리티지 호텔</span>
											<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
											<!-- <span class="location">필리핀 마닐라 스트릿로</span> -->
											<span class="info">
												<span class="pay">500peso</span>
											</span>
											<span class="date">
												17.06.05 까지
											</span>
										</div>
									</a>
								</div>
							</div>
							<!--  -->
							<!-- 실시간 추천 채용정보 각개-->
							<div class="col-md-3 col-xs-12">
								<div class="best-result-item">
									<div class="best-item-bookmark">
										<div class="bookmark-icon">
											<a href="#">
												<i class="fa fa-star-o"></i>
											</a>
										</div>
									</div>
									<a href="#">
										<div class="best-item-content">
											<span class="company">마닐라 헤리티지 호텔</span>
											<span class="title">마닐라 헤리티지 호텔 카지노 딜러 채용</span>
											<!-- <span class="location">필리핀 마닐라 스트릿로</span> -->
											<span class="info">
												<span class="pay">500peso</span>
											</span>
											<span class="date">
												17.06.05 까지
											</span>
										</div>
									</a>
								</div>
							</div>
							<!--  -->
						</div>


					</section>


				</div>
			</div>
<?php
include_once('footer.php');
 ?>
