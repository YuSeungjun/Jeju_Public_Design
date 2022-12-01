alert("미완성 홈페이지 입니다. - 유승준")

// 공지 이미지 슬라이드
imgslide();
function imgslide(){
  $val = $(".slide_box").attr("val");
  $mx = $(".slide_box").attr("mx");
	$(".slide_img"+$val).fadeOut(1000);
	if( $val == $mx ){ $val = 1; }
		else{ $val++; }
	$(".slide_img"+$val).fadeIn(1000);
	$(".slide_box").attr('val',$val);
	setTimeout('imgslide()',4000);
}

// 스크롤 이벤트 테스트

$(function(){
    $('body').scroll(function(){
        console.log('현재 스크롤 값은 ' + $('.content').scrollTop());
    });
});