<?
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  //meta ��ҿ��� ������ �ʱ������� ��Ÿ���� �Ӽ��� http-equiv �Ӽ��̴�.�̼Ӽ��� �����ϸ� ������ �⺻���(content-language), MIME Ÿ��(content-type), �⺻ ��Ÿ�Ͻ�Ʈ(default-style), ������ȣȯ������(X-UA-Compatible), ������ ���ε�(refresh) ���� ��Ÿ�� �� �ִ�.

<link rel="stylesheet" type="text/css" href="css/common.css">  //link �ܺ��� ������ �����Ű�� �±�   href �����Ұ��� �ּ� rel ���繮���� ���Ṯ���� ����ǥ��

</head>

<body>
<div id="wrap">  //div�� �ٹٲ��� ����� (��Ͽ��) id������ ��ҿ� ��Ÿ���� ����
	<div id="header"> 
    <? include "./lib/top_login1.php"; ?>      // C����� #include �� ���� ���ϸ� �� �ش��ϴ� ������ ������ ��ġ�� �����Ѵ� �����ΰ� ǥ�õ��� �ʾҴٸ� , �����Ϸ��� ������ include �� ����� ���ϰ� ������ �����������ϴ� ������ �����Ѵ�
	</div>  <!-- end of header --> 

	<div id="menu"> 
	<? include "./lib/top_menu1.php"; ?>
	</div>  <!-- end of menu --> 

  <div id="content">
		<div id="main_img"><video src="./img/main_img.mp4" controls="controls" loop="loop" autoplay="autoplay" width="1000"></div>  //video src���� ���� ������� controls ��������� ������� ���� �ݺ� �ڵ���� �ʺ� 
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
