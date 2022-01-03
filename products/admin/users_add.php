<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$email = $_POST['email'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM subscription WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
		else{
			$now = date('Y-m-d');
			try{
				$stmt = $conn->prepare("INSERT INTO subscription (email, subscription_date) VALUES (:email, :subscription_date)");
				$stmt->execute(['email'=>$email, 'subscription_date'=>$now]);
				$_SESSION['success'] = 'Email added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up email form first';
	}

	header('location: users.php');

?>