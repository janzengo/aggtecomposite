<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$email = $_POST['email'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM subscription WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		try{
			$stmt = $conn->prepare("UPDATE subscription SET email=:email WHERE id=:id");
			$stmt->execute(['email'=>$email, 'id'=>$id]);
			$_SESSION['success'] = 'Subscriber updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit subscriber form first';
	}

	header('location: users.php');

?>