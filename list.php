<?php
	include "lib.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
	<style>
		.list_table{ border-collapse: collapse; font-size: 17px; }
		.list_table tr{ height: 54px; border-bottom: 2px solid #043763; }
	</style>
</head>
<body>
	<header>
		<div class="header_area">
			<nav>
				<div class="logo">
					<a href="index.html">
						<img src="images/logo.png" alt="로고">
					</a>
				</div>
				<div class="menu">
					<ul class="menu_ul">
						<li><a href="#">소개</a>	</li>
						<li><a href="#">공지사항	</a></li>
						<li><a href="list.php">공유 게시판</a></li>
					</ul>
				</div>
				<div class="login">
					<a href="#">로그인</a>
					<div class="line"></div>
					<a href="#">회원가입</a>
				</div>
			</nav>
		</div>
	</header>
	<section class="list_section">
		<div class="list_area">
			<div class="list_about">
				<h1>공유 게시판</h1>
				<p>자영업자분들의 다양한 소식을 공유하는 곳</p>
			</div>
			<table class="list_table" width="1280px;" style="text-align: center; margin-top: 25px;">
				<tr class="list_table_top">
					<th width="100px;"> No </th>
					<th width="800px;"> 제목 </th>
					<th width="173px;"> 작성자 </th>
					<th> 작성일자 </th>
				</tr>
				<?php
					$query = "select * from sing_board order by idx desc";
					$result = mysqli_query($connect, $query);
		
					while($data = mysqli_fetch_array($result)){
				?>
				<tr>
					<td> <?=$data["idx"]?> </td>
					<td> <a href="view.php?idx=<?=$data["idx"]?>"><?=$data["subject"]?></a> </td>
					<td> <?=$data["name"]?> </td>
					<td> <?=substr($data["regdate"],0,10)?> </td>
				</tr>
				<?php } ?>
			</table>
		
			<a href="write.php" class="writing">글쓰기</a>
		</div>
	</section>

</body>
</html>
