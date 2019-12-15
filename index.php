<?
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  //meta 요소에서 문서의 초기정보를 나타내는 속성은 http-equiv 속성이다.이속성을 지정하면 문서의 기본언어(content-language), MIME 타입(content-type), 기본 스타일시트(default-style), 브라우저호환성설정(X-UA-Compatible), 페이지 리로드(refresh) 등을 나타낼 수 있다.

<link rel="stylesheet" type="text/css" href="css/common.css">  //link 외부의 문서를 연결시키는 태그   href 연결할곳의 주소 rel 현재문서와 연결문서의 관계표시

</head>

<body>
<div id="wrap">  //div는 줄바꿈이 생긴다 (블록요소) id유일한 요소에 스타일을 적용
	<div id="header"> 
    <? include "./lib/top_login1.php"; ?>      // C언어의 #include 와 같이 파일명 에 해당하는 파일을 현재의 위치에 삽입한다 만약경로가 표시되지 않았다면 , 삽입하려는 파일이 include 를 사용한 파일과 동일한 폴더에존재하는 것으로 간주한다
	</div>  <!-- end of header --> 

	<div id="menu"> 
	<? include "./lib/top_menu1.php"; ?>
	</div>  <!-- end of menu --> 

  <div id="content">
		<div id="main_img"><video src="./img/main_img.mp4" controls="controls" loop="loop" autoplay="autoplay" width="1000"></div>  //video src비디오 파일 경로지정 controls 재생도구를 출력할지 지정 반복 자동재생 너비 
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
