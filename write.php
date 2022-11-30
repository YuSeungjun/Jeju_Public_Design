<?php
	include "lib.php";
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
	<div class="write_area">
		<form action="writePost.php" method="post">
			<table class="write_table" width="100%" cellpadding="5">
				<tr>
					<th>이름</th>
					<td><input class="write_write" type="text" name="name" placeholder="작성자의 이름을 입력하세요." onfocus="this.placeholder=''" onblur="this.placeholder='작성자의 이름을 입력하세요.'" autocomplete='off'></td>
				</tr>
				<tr>
					<th>제목</th>
					<td><input class="write_write" placeholder="제목을 입력하세요." onfocus="this.placeholder=''" onblur="this.placeholder='제목을 입력하세요.'" autocomplete='off' type="text" name="subject" style="widows: 100%;"></td>
				</tr>
				<tr>
					<th>내용</th>
					<td class="write_table_td">
						<textarea name="memo" placeholder="내용을 입력하세요." onfocus="this.placeholder=''" onblur="this.placeholder='내용을 입력하세요.'" autocomplete='off' style="width: 100%; height: 350px;"></textarea>
					</td>
				</tr>
		
				<tr style="border: none;">
					<td colspan="2">
						<div style="text-align: center;">
							<input class="write_save" type="submit" value="저장">
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>


</body>
</html>