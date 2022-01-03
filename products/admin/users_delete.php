<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM subscription WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Subscriber deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select subscriber to delete first';
	}

	header('location: users.php');
	
?>