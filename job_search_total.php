<?php
include_once('common.php');
include_once('header.php');

$title = "맞춤채용검색";
?>

			<section class="page-header">
				<div class="container text-center">

					<h1><?php echo $title; ?></h1>
					<span class="font-lato size-18 weight-300">퀵트라바호에 등록된 모든 채용정보를<br>
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

								<div class="col-md-6 col-xs-6">
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
									</div>
								</div>

								<div class="col-md-6 col-xs-6">
									<div class="form-group">
										<label class="title">모집연령</label>
										<div class="select-wrapper">
											<select name="" class="form-control pointer required">
												<option value="">--- Select ---</option>
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
												<option value="">--- Select ---</option>
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
												<option value="">--- Select ---</option>
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
											<label class="title">협의 가능 여부</label>
											<label class="checkbox">
													<input type="checkbox" name="check1" value="1">
													<i></i> 협의 가능일시 체크해주세요
											</label>
									</div>
								</div>
							</div>
						</div>

						<?php include_once('default_sort.php');?>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
										<button type="submit" class="btn btn-3d btn-search btn-lg btn-block margin-top-30">
											Search
										</button>
							</div>
						</div>

					</section>
					<?php
					include_once('search_result.php');
					?>


				</div>
			</div>
<?php
include_once('footer.php');
 ?>
