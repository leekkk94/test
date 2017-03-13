


<div id="header" class="sticky clearfix">

  <!-- TOP NAV -->
  <header id="topNav">
    <div class="container">
      <!-- BUTTONS -->
      <ul class="pull-left nav nav-pills nav-second-main">
        <!-- QUICK push -->
        <li class="quick-push">
          <a href="#">
            <span class="badge badge-yellow btn-xs badge-corner">2</span>
            <i class="fa fa-bell-o"></i>
          </a>
          <div class="quick-push-box">
            <div class="quick-push-wrapper">

              <a href="#" class="yet"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->
              <a href="#"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->
              <a href="#"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->
              <a href="#"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->
              <a href="#"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->
              <a href="#"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->
              <a href="#"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->
              <a href="#"><!-- push item -->
                <p><span>이진영</span> 님이 회원님의 이력서를 관심있어 합니다.</p>
                <small>2017-02-01 11:45</small>
              </a><!-- /push item -->


            </div>

            <!-- quick push footer -->
            <div class="quick-push-footer clearfix">
              <a href="#" class="btn btn-primary btn-xs pull-right" id="quick-push-close">Close</a>
            </div>
            <!-- /quick push footer -->

          </div>
        </li>
        <!-- /QUICK push -->

      </ul>
      <!-- /BUTTONS -->


      <!-- Logo -->

        <a class="logo" href="<?php echo TR_URL; ?>/index.php">
          <img src="<?php echo TR_URL; ?>/assets/images/main_logo.png" alt="" />
        </a>

      <!--
        Top Nav

        AVAILABLE CLASSES:
        submenu-dark = dark sub menu
      -->


      <!-- Mobile Menu Button -->

      <!-- <a id="sidepanel_btn" href="#" class="btn btn-mobile"><i class="fa fa-bars"></i></a> -->


      <!-- Mobile Menu Button -->
      <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
        <i class="fa fa-bars"></i>
      </button>



<?php if(!$mb) { ?>

      <!-- 비로그인시 -->
      <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
        <nav class="nav-main">
          <button class="btn btn-close" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="glyphicon glyphicon-remove"></i>
          </button>

          <div class="nav-top">
          </div>
          <div	class="nav-bottom">

            <h4>세상에서 가장 쉬운 직업,<br> 퀵트라바호에서 찾으실 수 있습니다.</h4>
            <div class="not-login">
              <div class="col-xs-6">
                <a href="<?php echo TR_URL; ?>/login.php" class="btn btn-default">로그인</a>
              </div>
              <div class="col-xs-6">
                <a href="<?php echo TR_URL; ?>/sign_up_type.php" class="btn btn-default">회원가입</a>
              </div>
              <div class="col-xs-12">
                <a class="btn btn-block btn-social btn-facebook">
                  <i class="fa fa-facebook"></i> Sign in with Facebook
                </a>

                <a href="<?php echo TR_URL; ?>/#" class="forgot-pw">비밀번호를 잊으셨나요?</a>
              </div>
            </div>

          </div>

        </nav>
      </div>
      <!-- 비로그인시 -->
<?php }

 else if($mb['user_id'] && $mb['type_user'] == 'jobfinder') {
   ?>

      <!-- 로그인시 -->


      <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
        <nav class="nav-main">
          <button class="btn btn-close" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="glyphicon glyphicon-remove"></i>
          </button>

          <div class="nav-top">

            <div class="testimonial row">
              <div class="testimonial-img">
                <img class="rounded" src="data/general_thumbnail/1.jpg" alt="">
              </div>
              <div class="testimonial-content">
                <h2><span>James Lee</span> 님 환영합니다.</h2>
                <a href="<?php echo TR_URL; ?>/member_form.php" class="btn btn-default">내 이력서관리</a>
                <a href="<?php echo TR_URL; ?>/logout.php" class="btn btn-default">Log out</a>
              </div>
            </div>

            <div class="request-box row">
              <div class="col-xs-4">
                <a href="<?php echo TR_URL; ?>/mybookmark_user_list.php">
                  <h3>12</h3>
                  <h5>북마크한<br>채용정보</h5>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="<?php echo TR_URL; ?>/sentresume_list.php">
                  <h3>5</h3>
                  <h5>제출한<br>이력서</h5>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="<?php echo TR_URL; ?>/receivedcareers_list.php">
                  <h3>45</h3>
                  <h5>받은 러브콜</h5>
                </a>
              </div>
            </div>

          </div>
          <div	class="nav-bottom">

            <ul class="list-group">

              <li class="list-group-item"><a href="<?php echo TR_URL; ?>/index.php"><i class="ico-category fa fa-home"></i><b>홈</b></a></li>
              <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed">
                  <i class="ico-dd icon-angle-down"></i>
                  <i class="ico-category fa fa-building"></i>
                  채용검색
                </a>
                  <ul id="collapse-1" class="list-unstyled collapse">
                    <li><a href="<?php echo TR_URL; ?>/job_search_eazy.php">쉬운채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_total.php">맞춤채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_location.php">지역별채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_urgent.php">긴급채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_normal.php">일반채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_foreign.php">외국인회사검색</a></li>
                  </ul>
              </li>
              <li class="list-group-item"><a href="<?php echo TR_URL; ?>/resume_search.php"><i class="ico-category fa fa-users"></i>인재정보</a></li>


              <li class="list-group-item"><a href="<?php echo TR_URL; ?>/careers_list.php"><i class="ico-category fa fa-drivers-license-o"></i>사업장/채용정보 관리</a></li>

              <li class="list-group-item"><a href="<?php echo TR_URL; ?>/member_form.php"><i class="ico-category fa fa-drivers-license-o"></i>내 이력서관리</a></li>

              <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed">
                  <i class="ico-dd icon-angle-down"></i>
                  <i class="ico-category fa fa-cog"></i>
                  환경설정
                </a>
                  <ul id="collapse-2" class="list-unstyled collapse">
                    <li>
                      <a href="<?php echo TR_URL; ?>/setting_user.php" class="dropdown-toggle">개인정보설정</a>
                    </li>
                    <li>
                      <a href="<?php echo TR_URL; ?>/change_password.php" class="dropdown-toggle">비밀번호변경</a>
                    </li>
                    <li>
                      <a href="<?php echo TR_URL; ?>/withdraw.php" class="dropdown-toggle">회원탈퇴</a>
                    </li>

                  </ul>
              </li>

              <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-4" class="collapsed">
                  <i class="ico-dd icon-angle-down"></i>
                  <i class="ico-category fa fa-question-circle-o"></i>
                  고객센터
                </a>
                <ul id="collapse-4" class="list-unstyled collapse">
                  <li><a href="<?php echo TR_URL; ?>/notice.php">Notice</a></li>
                  <li><a href="<?php echo TR_URL; ?>/faq.php">FAQ</a></li>
                  <li><a href="<?php echo TR_URL; ?>/inquiry.php">Inquiry</a></li>
                </ul>
              </li>
            </ul>

          </div>

        </nav>
      </div>
      <!-- 로그인시 -->
<?php
}
    else if($mb['user_id'] && $mb['type_user'] == 'company') {
?>

<!-- 로그인시 -->


      <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
        <nav class="nav-main">
          <button class="btn btn-close" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="glyphicon glyphicon-remove"></i>
          </button>

          <div class="nav-top">

            <div class="testimonial row">
              <div class="testimonial-img">
                <img class="rounded" src="<?php echo COMPANY_UPLOAD_URL.$cp['main_img'];?>" alt="">
              </div>
              <div class="testimonial-content">
                <p>Welcome,</p>
                <h2><span><?php echo $mb['first_name'] . " " . $mb['last_name']; ?></span></h2>
                <a href="<?php echo TR_URL; ?>/company_form_list.php" class="btn btn-default">사업장관리</a>
                <a href="<?php echo TR_URL; ?>/logout.php" class="btn btn-default">Log out</a>
              </div>
            </div>

            <div class="request-box row">
              <div class="col-xs-4">
                <a href="<?php echo TR_URL; ?>/mybookmark_user_list.php">
                  <h3>12</h3>
                  <h5>북마크한<br>인재정보</h5>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="<?php echo TR_URL; ?>/sentresume_list.php">
                  <h3>5</h3>
                  <h5>보낸 러브콜</h5>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="<?php echo TR_URL; ?>/receivedcareers_list.php">
                  <h3>45</h3>
                  <h5>받은 이력서</h5>
                </a>
              </div>
            </div>

          </div>
          <div	class="nav-bottom">

            <ul class="list-group">

              <li class="list-group-item"><a href="<?php echo TR_URL; ?>/index.php"><i class="ico-category fa fa-home"></i><b>홈</b></a></li>
              <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed">
                  <i class="ico-dd icon-angle-down"></i>
                  <i class="ico-category fa fa-building"></i>
                  채용검색
                </a>
                  <ul id="collapse-1" class="list-unstyled collapse">
                    <li><a href="<?php echo TR_URL; ?>/job_search_eazy.php">쉬운채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_total.php">맞춤채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_location.php">지역별채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_urgent.php">긴급채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_normal.php">일반채용검색</a></li>
                    <li><a href="<?php echo TR_URL; ?>/job_search_foreign.php">외국인회사검색</a></li>
                  </ul>
              </li>
              <li class="list-group-item"><a href="<?php echo TR_URL; ?>/resume_search.php"><i class="ico-category fa fa-users"></i>인재정보</a></li>


              <li class="list-group-item"><a href="<?php echo TR_URL; ?>/careers_list.php"><i class="ico-category fa fa-drivers-license-o"></i>사업장/채용정보 관리</a></li>

              <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed">
                  <i class="ico-dd icon-angle-down"></i>
                  <i class="ico-category fa fa-cog"></i>
                  환경설정
                </a>
                  <ul id="collapse-2" class="list-unstyled collapse">
                    <li>
                      <a href="<?php echo TR_URL; ?>/setting_user.php" class="dropdown-toggle">개인정보설정</a>
                    </li>
                    <li>
                      <a href="<?php echo TR_URL; ?>/change_password.php" class="dropdown-toggle">비밀번호변경</a>
                    </li>
                    <li>
                      <a href="<?php echo TR_URL; ?>/withdraw.php" class="dropdown-toggle">회원탈퇴</a>
                    </li>

                  </ul>
              </li>

              <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-4" class="collapsed">
                  <i class="ico-dd icon-angle-down"></i>
                  <i class="ico-category fa fa-question-circle-o"></i>
                  고객센터
                </a>
                <ul id="collapse-4" class="list-unstyled collapse">
                  <li><a href="<?php echo TR_URL; ?>/notice.php">Notice</a></li>
                  <li><a href="<?php echo TR_URL; ?>/faq.php">FAQ</a></li>
                  <li><a href="<?php echo TR_URL; ?>/inquiry.php">Inquiry</a></li>
                </ul>
              </li>
            </ul>

          </div>

        </nav>
      </div>
      <!-- 로그인시 -->

    <?php
    }

?>

    </div>
  </header>
  <!-- /Top Nav -->

</div>
