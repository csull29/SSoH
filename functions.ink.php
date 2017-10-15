<?php

function setComments($conn) {
	if (isset($_POST['commentSubmit'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comment (uid, date, message) VALUES ('$uid', '$date', '$message')";
		$result = mysqli_query($conn,$sql);
	}
}
function getComments($conn) { 
	$sql = "SELECT * FROM comment"; 
	$result = mysqli_query($conn,$sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='comment-box'><p>";
			echo $row['uid']."<br>";
			echo $row['date']."<br><br>";
			echo nl2br($row['message']);
		echo "</p>
			<form class = 'delete-btn' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button type = 'submit' name='commentDelete'>Delete</button>
			</form>
			<form class = 'edit-btn' method='POST' action='editcomment.php'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<input type='hidden' name='uid' value='".$row['uid']."'>
				<input type='hidden' name='date' value='".$row['date']."'>
				<input type='hidden' name='message' value='".$row['message']."'>
				<button>Edit</button>
			</form>
		</div>";
	}
}
function editComments($conn) {
	if (isset($_POST['commentSubmit'])){
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		$sql = "UPDATE comment SET message = '$message' WHERE cid='$cid'";
		$result = mysqli_query($conn,$sql);
		header("Location: post.php");
		
	}
}
function deleteComments($conn){
	if (isset($_POST['commentDelete'])){
		$cid = $_POST['cid'];
		
		$sql =  "DELETE FROM comment WHERE cid = '$cid'";
		$result = mysqli_query($conn,$sql);
	}
}