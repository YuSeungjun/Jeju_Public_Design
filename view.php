<?php
	include "lib.php";

	$idx = $_GET['idx'];
	$idx = mysqli_real_escape_string($connect, $idx);

	$query = "select * from sing_board where idx='$idx' ";
	$result = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>
	<header>
		<div class="header_area">
			<nav>
				<div class="logo">
					<a href="index.html">
						<img src="images/logo.png" 	alt="로고">
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
	<div class="view_area">
		<form action="writePost.php" method="post">
			<table class="view_table" width=100% cellpadding="5">
				<tr>
					<th>이름</th>
					<td class="view_content"><?=$data["name"]?></td>
				</tr>
				<tr>
					<th>제목</th>
					<td class="view_content"><?=$data["subject"]?></td>
				</tr>
				<tr>
					<th>내용</th>
					<td class="view_content" style="padding: 15px;">
						<?=nl2br($data["memo"])?>
					</td>
				</tr>
		
				<tr style="border: none;">
					<td colspan="2">
						<a class="view_del view_btn" href="del.php?idx=<?=$idx?>" onclick="return confirm('정말 삭제할까요?')">삭제</a>
						<a class="view_back view_btn" href="list.php">뒤로가기</a>
					</td>
				</tr>
			</table>
		</form>
	</div>


</body>
</html>