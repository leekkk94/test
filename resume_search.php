<?php
include_once('common.php');
include_once('header.php');
?>

			<section class="page-header">
				<div class="container text-center">

					<h1>인재정보검색</h1>
					<span class="font-lato size-18 weight-300">퀵트라바호에 등록된 모든 인재정보를<br>
					조건별로 상세하게 검색해보세요!</span>

				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">
						<div class="detail-sort">

							<div class="form-group">
								<label class="title">
									검색어
								</label>
								<input id="#" name="#" placeholder="원하시는 검색어를 입력해주세요" type="text" class="form-control" value="" maxlength="30" >
								<!-- <p class="help-block">설명 </p> -->
							</div>


							<div class="row">

								<div class="col-md-12">
									<div class="form-group">
										<label class="title">성별</label>

										<label class="radio">
											<input type="radio" name="radio-btn" value="1">
											<i></i> 남자
										</label>
										<label class="radio">
											<input type="radio" name="radio-btn" value="2">
											<i></i> 여자
										</label>
										<label class="radio">
											<input type="radio" name="radio-btn" value="3">
											<i></i> 상관없음
										</label>
									</div>
								</div>



							</div>

							<div class="row">
								<div class="col-md-6 col-xs-6">
									<div class="form-group">
										<label class="title">모집연령시작</label>
										<div class="select-wrapper">
											<select name="" class="form-control pointer required">
												<option value="">상관없음</option>
												<?php for($i = 12;$i <= 99; $i++){
													?>
												<option value="<?php echo $i; ?>"><?php echo $i . '세'; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-6">
									<div class="form-group">
										<label class="title">모집연령종료</label>
										<div class="select-wrapper">
											<select name="" class="form-control pointer required">
												<option value="">상관없음</option>
												<?php for($i = 12;$i <= 99; $i++){
													?>
												<option value="<?php echo $i; ?>"><?php echo $i . '세'; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="row">

								<div class="col-md-6 col-xs-6">
									<div class="form-group">
										<label class="title">경력조건</label>
										<div class="select-wrapper">
											<select name="" class="form-control pointer required">
												<option value="상관없음">상관없음</option>
												<option value="있음(1년이하)">있음(1년이하)</option>
												<option value="있음(1년이상)">있음(1년이상)</option>
											</select>
				            </div>
									</div>
								</div>

								<div class="col-md-6 col-xs-6">
									<div class="form-group">
										<label class="title">학력조건</label>
										<div class="select-wrapper">
											<select name="" class="form-control pointer required">
												<option value="">상관없음</option>
												<option value="초졸">초졸</option>
												<option value="중졸">중졸</option>
											</select>
				            </div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-xs-6">
									<div class="form-group">
											<label class="title">최소급여</label>
											<div class="input-group">
						            <input id="custIncomeTtamt" name="custIncomeTtamt" min="0" max="99999" placeholder="0" type="number" class="form-control text-right" value="" maxlength="5" autocomplete="off">
						            <div class="input-group-addon">peso</div>
						          </div>
									</div>
								</div>
								<div class="col-md-6 col-xs-6">
									<div class="form-group">
											<label class="title">최대급여</label>
											<div class="input-group">
						            <input id="custIncomeTtamt" name="custIncomeTtamt" min="0" max="99999" placeholder="0" type="number" class="form-control text-right" value="" maxlength="5" autocomplete="off">
						            <div class="input-group-addon">peso</div>
						          </div>
									</div>
								</div>
							</div>

													<?php include_once('default_sort.php');?>

						</div>


					</section>
					<section class="section-box">
						<div class="page-header">
							<div class="page-header-title">
				        <h4>인재정보<span>총 301건</span></h4>
							</div>
							<div class="page-header-sort">
								<div class="select-wrapper">
		              <select class="form-control">
		                <option value="">정렬기준</option>
		                <option value="1">등록일순</option>
		              </select>
		            </div>
							</div>
				    </div>

						<!-- 채용각개 -->
						<div class="search-result-item4">
							<a href="<?php echo TR_URL; ?>/resume_view.php">
								<div class="search-result-thumb">
									<img class="rounded" src="data/general_thumbnail/1.jpg" alt="">
								</div>
								<div class="search-result-content">
									<span class="username">Greg Hop</span>
									<span class="title">I want to serve</span>
									<span class="location">필리핀 마닐라 스트릿로</span>
									<span class="info">
										<span class="age">21세</span>
										<span class="sex">여자</span>
										<span class="career">1년이상 경력</span>
										<span class="edu">4년제 대학 졸업</span>
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





					</section>


				</div>
			</div>
<?php
include_once('footer.php');
 ?>
