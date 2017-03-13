<?php
include_once('common.php');
include_once('header.php');

$title = "긴급채용검색";
?>

			<section class="page-header">
				<div class="container text-center">

					<h1><?php echo $title; ?></h1>
					<span class="font-lato size-18 weight-300">긴급하게 인력을 구하는<br>
					채용을 검색 해보세요!</span>

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
