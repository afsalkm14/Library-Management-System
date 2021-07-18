<?php
include("DBConnection.php");
function insertBooks($BookData){
	$isbn=$BookData["ISBN"];
	$title=$BookData["title"];
	$edition=$BookData["Volume"];
	$author=$BookData["Author"];
	$pages=$BookData["num_pages"];
  $publisher=$BookData["publisher"];
	$BookQuery="insert into books_info(isbn,title,author,edition,publisher,pages) values('$isbn','$title','$author','$edition','$publisher','$pages')";
	if( mysqli_query($db, $BookQuery)) {
		$messgae = "Book created Successfully.";
		$status = 1;
	} else {
		$messgae = "Book creation failed.";
		$status = 0;
	}
	$BookResponse = array(
		'status' => $status,
		'status_message' => $messgae
	);
	header('Content-Type: application/json');
	echo json_encode($BookResponse);
}
?>
