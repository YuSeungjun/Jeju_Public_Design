<?php
	include "lib.php";

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$memo = $_POST['memo'];

	$name = mysqli_real_escape_string($connect, $name);
	$subject = mysqli_real_escape_string($connect, $subject);
	$memo = mysqli_real_escape_string($connect, $memo);



	$regdate = date("Y-m-d H:i:s");
	$ip = $_SERVER ["REMOTE_ADDR"];

	$query = "insert into sing_board(name,subject, memo, regdate, ip)
		values('$name','$subject','$memo','$regdate','$ip')";

	mysqli_query($connect, $query);


?>

<script>
	location.href='list.php';	
</script>