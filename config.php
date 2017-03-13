<?php


/********************
    상수 선언
********************/

if (PHP_VERSION >= '5.1.0') {
    //if (function_exists("date_default_timezone_set")) date_default_timezone_set("Asia/Seoul");
    date_default_timezone_set('Asia/Manila');
}


// 이 상수가 정의되지 않으면 각각의 개별 페이지는 별도로 실행될 수 없음
define('_TRABAHO_', true);

/********************
    경로 상수
********************/

if (isset($tr_path['path'])) {
    define('TR_PATH', $tr_path['path']);
} else {
    define('TR_PATH', '');
}

define('TR_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/trabaho');

define('TR_LIB_URL', TR_URL . '/lib');
define('TR_ACTION_URL', TR_URL . '/action');
define('GENERAL_UPLOAD_URL', TR_URL .'/data/general_thumbnail/');
define('COMPANY_UPLOAD_URL', TR_URL .'/data/company_thumbnail/');


define('GENERAL_UPLOAD_PATH', TR_PATH.'/data/general_thumbnail/');
define('COMPANY_UPLOAD_PATH', TR_PATH.'/data/company_thumbnail/');

define('TR_DBCONFIG_FILE',  'dbconfig.php');
define('TR_ADMIN_DIR',      'adm');
define('TR_BBS_DIR',        'bbs');
define('TR_PHPMAILER_DIR',  'PHPMailer');
define('TR_SESSION_DIR',    'session');
define('TR_THEME_DIR',      'theme');


//==============================================================================



/********************
    시간 상수
********************/
// 서버의 시간과 실제 사용하는 시간이 틀린 경우 수정하세요.
// 하루는 86400 초입니다. 1시간은 3600초
// 6시간이 빠른 경우 time() + (3600 * 6);
// 6시간이 느린 경우 time() - (3600 * 6);
define('TR_SERVER_TIME',    time());
define('TR_TIME_YMDHIS',    date('Y-m-d H:i:s', TR_SERVER_TIME));
define('TR_TIME_YMD',       substr(TR_TIME_YMDHIS, 0, 10));
define('TR_TIME_HIS',       substr(TR_TIME_YMDHIS, 11, 8));

// 입력값 검사 상수 (숫자를 변경하시면 안됩니다.)
define('TR_ALPHAUPPER',      1); // 영대문자
define('TR_ALPHALOWER',      2); // 영소문자
define('TR_ALPHABETIC',      4); // 영대,소문자
define('TR_NUMERIC',         8); // 숫자
define('TR_HANGUL',         16); // 한글
define('TR_SPACE',          32); // 공백
define('TR_SPECIAL',        64); // 특수문자

// 퍼미션
define('TR_DIR_PERMISSION',  0755); // 디렉토리 생성시 퍼미션
define('TR_FILE_PERMISSION', 0644); // 파일 생성시 퍼미션

// 모바일 인지 결정 $_SERVER['HTTP_USER_AGENT']
define('TR_MOBILE_AGENT',   'phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony');

// SMTP
// lib/mailer.lib.php 에서 사용
define('TR_SMTP',      '127.0.0.1');
define('TR_SMTP_PORT', '25');


/********************
    기타 상수
********************/


?>
