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
						<li class="active"><a href="<?php echo TR_URL; ?>/notice.php">Notice</a></li>
						<li><a href="<?php echo TR_URL; ?>/faq.php">FAQ</a></li>
						<li><a href="<?php echo TR_URL; ?>/inquiry.php">Inquiry</a></li>
					</ul>
				</div>
			</section>

			<div class="inner-wrap">
				<!-- -->
				<div class="container">
					<section class="section-box">

						<div class="board-list-wrapper">

						  <div class="container-fluid">

						      <div class="board-pinned-wrapper">
						        <table class="table board board-pinned">
						          <tbody>

						            <tr data-url="/notice/20" data-id="20">
						              <td class="board-td-no">
						                <span class="badge">중요</span>
						              </td>
						              <td class="board-td-content" colspan="2">
														<a href="notice_view.php">
									            2월 테스트이벤트
														</a>
						              </td>
						            </tr>

						            <tr data-url="/notice/14" data-id="14">
						              <td class="board-td-no">
						                <span class="badge">중요</span>
						              </td>
						              <td class="board-td-content" colspan="2">
														<a href="notice_view.php">
									            2월 테스트이벤트
														</a>
						              </td>
						            </tr>

						          </tbody>
						        </table>
						      </div>

						    <table id="board-list" class="table board">
						      <tbody>

						        <tr>
						          <td class="board-td-no">25</td>
						          <td class="board-td-content">
												<a href="notice_view.php">
							            2월 테스트이벤트
												</a>
						          </td>
						          <td class="board-td-date">
						            17.02.21
						          </td>
						        </tr>
										<tr>
						          <td class="board-td-no">25</td>
						          <td class="board-td-content">
												<a href="notice_view.php">
							            2월 테스트이벤트
												</a>
						          </td>
						          <td class="board-td-date">
						            17.02.21
						          </td>
						        </tr>

						      </tbody>
									<tfoot>
						      <tr>
						        <td colspan="3" class="text-center" data-role="page-next"><a href="">더보기</a></td>
						      </tr>
						      </tfoot>
						    </table>

						  </div>

						</div>

					</section>
				</div>
			</div>
			<?php
			include_once('footer.php');
			?>
