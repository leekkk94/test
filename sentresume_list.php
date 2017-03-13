<?php
include_once('common.php');
include_once('header.php');
?>
			<section class="page-header page-header-xs">
				<div class="container text-center">

					<h1>제출한 이력서</h1>
					<ul class="page-header-tabs list-inline">
						<li><a href="<?php echo TR_URL; ?>/mybookmark_user_list.php">북마크한 채용정보</a></li>
						<li class="active"><a href="<?php echo TR_URL; ?>/sentresume_list.php">제출한 이력서</a></li>
						<li><a href="<?php echo TR_URL; ?>/receivedcareers_list.php">받은 러브콜</a></li>
					</ul>
				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">
						<div class="page-header">
							<div class="page-header-title">
				        <h4>제출한 이력서<span>총 11건</span></h4>
							</div>
							<div class="page-header-sort">
								<div class="select-wrapper">
		              <select class="form-control">
		                <option value="">정렬기준</option>
		                <option value="1">월급많은순</option>
										<option value="2">채용마감일순</option>

		              </select>
		            </div>
							</div>
				    </div>


						<!-- 채용각개 -->
						<div class="search-result-item2">
							<div class="search-result-content">
								<span class="company">마닐라 헤리티지 호텔</span>
								<span class="title"><a href="<?php echo TR_URL; ?>/job_view.php">마닐라 헤리티지 호텔 카지노 딜러 채용</a></span>
								<span class="location">필리핀 마닐라 스트릿로</span>
								<span class="info">
									<span class="period">2017-03-01 까지</span>
									<span class="age">연령무관</span>
									<span class="sex">성별무관</span>
									<span class="career">경력무관</span>
									<span class="edu">학력무관</span>
									<span class="pay">500peso</span>
								</span>
							</div>
							<div class="btn-area">
								<a href="#" class="btn btn-primary btn-xs">북마크 추가</a>
								<a href="#" class="btn btn-default btn-xs">삭제</a>
							</div>
						</div>
						<!-- 채용각개 -->
						<div class="search-result-item2">
							<div class="search-result-content">
								<span class="company">마닐라 헤리티지 호텔</span>
								<span class="title"><a href="<?php echo TR_URL; ?>/job_view.php">마닐라 헤리티지 호텔 카지노 딜러 채용</a></span>
								<span class="location">필리핀 마닐라 스트릿로</span>
								<span class="info">
									<span class="period">2017-03-01 까지</span>
									<span class="age">연령무관</span>
									<span class="sex">성별무관</span>
									<span class="career">경력무관</span>
									<span class="edu">학력무관</span>
									<span class="pay">500peso</span>
								</span>
							</div>
							<div class="btn-area">
								<a href="#" class="btn btn-primary btn-xs">북마크 추가</a>
								<a href="#" class="btn btn-default btn-xs">삭제</a>
							</div>
						</div>
						<!-- 채용각개 -->
						<div class="search-result-item2">
							<div class="search-result-content">
								<span class="company">마닐라 헤리티지 호텔</span>
								<span class="title"><a href="<?php echo TR_URL; ?>/job_view.php">마닐라 헤리티지 호텔 카지노 딜러 채용</a></span>
								<span class="location">필리핀 마닐라 스트릿로</span>
								<span class="info">
									<span class="period">2017-03-01 까지</span>
									<span class="age">연령무관</span>
									<span class="sex">성별무관</span>
									<span class="career">경력무관</span>
									<span class="edu">학력무관</span>
									<span class="pay">500peso</span>
								</span>
							</div>
							<div class="btn-area">
								<a href="#" class="btn btn-primary btn-xs">북마크 추가</a>
								<a href="#" class="btn btn-default btn-xs">삭제</a>
							</div>
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
