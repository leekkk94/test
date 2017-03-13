//모달팝업


$(function(){
    // modal
    $("body").prepend('<div class="modal_wrap">');

        $("#popModal").on("show.bs.modal", function (event) {
            var button = $(event.relatedTarget),
                recipient = button.data("whatever"),
                url = button.data("url"),
                modal = $(this);

            modal.find(".modal-title").text(recipient);
            modal.find(".pop-content").load(url);

        });
});

//북마크추가

function product_scrap(adid, url, obj){
	var userLogin = "False";
	var userType = "";

	if(userLogin.toLowerCase() == "true"){
		if(userType != "C"){
			$(obj).addClass('on');
			popup_open('/job/popup/FavoritePop.asp?adid='+adid, 'Favorite', 354, 307, 'no');
			return false;
		}else{
			if (confirm("개인회원으로 로그인 후 이용 가능한 서비스입니다.\n지금 로그인 하시겠습니까?")){
				loginPerson(url, '');
				return false;
			}
		}
	}else{
		if (confirm("개인회원으로 로그인 후 이용 가능한 서비스입니다.\n지금 로그인 하시겠습니까?")){
			loginPerson(url, '');
			return false;
		}
	}
}

function editCareersStatus(){

	if (confirm("test script1")){
		alert('성공');
		return false;
	}
}

//회원가입시 이메일 검증
function isEmail(str) {
		if (str.length < 5) {
				document.getElementById("emailResult").innerHTML = "<p class='help-block'>※ 로그인 시 아이디로 사용됩니다. </p>";
				// document.getElementById("txtHint").style.border="0px";
				return;

		}
		if (!(/^[\w\.-_\+]+@[\w-]+(\.\w{2,3})+$/).test(str)) {
			document.getElementById("emailResult").innerHTML = "<p class='help-block text-warning'>Please enter an email address (for example, johndoe@acme.com).</p>";
		}
		else{
			if (window.XMLHttpRequest)  {

			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else   {

			// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
							xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
									document.getElementById("emailResult").innerHTML = xmlhttp.responseText;
								 // document.getElementById("emailResult").style.border="1px solid #A5ACB2";
							}
					};
					var enc = escape(encodeURIComponent(str));

					xmlhttp.open("GET", "action/empty_email.php?q=" + enc, true);
					xmlhttp.send();
		}

}

function pwEqual(){
	var pwd = document.getElementById("pwd").value;
	var pwdRe = document.getElementById("pwdRe").value;
	if(pwd.length > 5 && pwdRe.length > 5){
		if(pwd!=pwdRe){
			 document.getElementById("pwResult1").innerHTML = "<p class='help-block text-warning'>Passwords don't match.</p>";
			 document.getElementById("pwResult2").innerHTML = "<p class='help-block text-warning'>Passwords don't match.</p>";
			 }
		else{
			document.getElementById("pwResult1").innerHTML = "";
			document.getElementById("pwResult2").innerHTML = "";
		}
	}

}

function deleteCompany(id){
  if (confirm("사업장을 삭제 하시겠습니까?")){
  document.location.replace('action/company_form_action.php?w=d&id='+id);
  return false;
  }
}

//1차 카테고리를 기반으로 2차카테고리 목록을 가져온다.
function loadCategory(str,type) {
		// if (str.length < 5) {
		// 		document.getElementById("category2Area").innerHTML = "<p class='help-block'>※ 로그인 시 아이디로 사용됩니다. </p>";
		// 		// document.getElementById("txtHint").style.border="0px";
		// 		return;
    //
		// }

    $('.mCSB_container li a').parent().removeClass("on");
    $(".mCSB_container li").eq((str-1)).addClass("on");

      //$(':checkbox').parent().removeClass("on");

			if (window.XMLHttpRequest)  {

			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else   {

			// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
							xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
									document.getElementById("category2Area").innerHTML = xmlhttp.responseText;
								 // document.getElementById("emailResult").style.border="1px solid #A5ACB2";
							}
					};
					var enc1 = escape(encodeURIComponent(str));
          var enc2 = escape(encodeURIComponent(type));
					xmlhttp.open("GET", "action/category_select.php?q1=" + enc1 + "&q2=" + enc2, true);
					xmlhttp.send();


}


//체크박스일시 5개까지 제한

var maxChecked = 5;   //선택가능한 체크박스 갯수
var totalChecked = 0; // 설정 끝

function CountChecked(field) {
    if (field.checked)
        totalChecked += 1;
    else
        totalChecked -= 1;

    if (totalChecked > maxChecked) {
        alert ("최대 "+maxChecked+"개 까지만 가능합니다.");
    field.checked = false;
    totalChecked -= 1;
    }
}

function ResetCount(){
    totalChecked = 0;
}
