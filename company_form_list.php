<?php
include_once('common.php');
include_once('header.php');
if(!$mb || !$cp){
	$home_url =  TR_URL.'/index.php';
	goto_url($home_url);
	exit;
}

$sql_common = " FROM {$tr['company_table']}";
$sql_search = " WHERE mb_id = '{$mb['id']}' and company_delete = '0'";
$sql = " select count(*) as cnt {$sql_common} {$sql_search} {$sql_order} ";
$data = mysqli_query($dbc,$sql);

$row = mysqli_fetch_array($data);
$total_count = $row['cnt'];

$rows = 10;
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산

if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함


$sql2 = " select * {$sql_common} {$sql_search} {$sql_order} limit {$from_record}, {$rows} ";
$data2 = mysqli_query($dbc,$sql2);

if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
?>
			<section class="page-header page-header-xs">
				<div class="container text-center">

					<h1>사업장/채용정보 관리</h1>
					<ul class="page-header-tabs list-inline">
						<li><a href="<?php echo TR_URL; ?>/careers_list.php">등록된 채용정보</a></li>
						<li><a href="<?php echo TR_URL; ?>/careers_list_end.php">종료된 채용정보</a></li>
						<li class="active"><a href="<?php echo TR_URL; ?>/company_form_list.php">사업장 관리</a></li>
						<li><a href="<?php echo TR_URL; ?>/careers_form.php">채용정보 신규등록</a></li>
					</ul>
				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">
						<div class="page-header">
							<div class="page-header-title">
				        <h4>내 사업장<span>총 <?php echo $total_count; ?> 건</span></h4>
							</div>
							<div class="add-btn">
								<a href="<?php echo TR_URL; ?>/company_form.php" class="btn btn-default btn-md">사업장 추가</a>
							</div>
				    </div>
						<div class="row">
						</div>
						<div class="row">
							<?php

							if($total_count > 0){
								while ($row2 = mysqli_fetch_array($data2)) {
								?>
								<!-- 채용각개 -->
								<div class="col-md-4 col-sm-6">

									<div class="search-result-item3">

											<div class="search-result-thumb">
												<img class="rounded" src="<?php echo COMPANY_UPLOAD_URL.$row2['main_img'];?>" alt="">
											</div>
											<div class="search-result-content">
												<span class="company"><?php echo $row2['company_name'];?></span>
												<span class="location"><?php echo $row2['adress'];?></span>
											</div>

										<div class="btn-area">
											<a href="<?php echo TR_URL; ?>/company_form.php?id=<?php echo $row2['id'];?>" class="btn btn-primary btn-xs">수정</a>
											<a href="#" onclick="deleteCompany('<?php echo $row2['id'];?>');" class="btn btn-default btn-xs">삭제</a>
										</div>
									</div>
								</div>
								<?php
								}
							}
							else{
								?>
								<p class="text-center margin-top-50 margin-bottom-50">등록된 사업장이 없습니다. 사업장을 등록해보세요.</p>
								<?php
							}
							?>

						</div>

						<?php
						$pagelist = get_paging(10, $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page=');
						echo $pagelist;
						?>




					</section>
				</div>
			</div>
			<?php
			include_once('footer.php');
			?>
