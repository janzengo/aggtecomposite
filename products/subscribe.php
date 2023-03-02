<style>
    .preloader{position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999999; background-color:#ffffff; background-position:center center;	background-repeat:no-repeat; background-image:url(../images/preloader.gif);}
</style>
<div class="preloader">
</div>
<?php
	include 'includes/session.php';

	if(isset($_POST['submit'])){
		$email = $_POST['userEmail'];
			$conn = $pdo->open();
			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM subscription WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();

			$now = date('Y-m-d');
			try{
			$stmt = $conn->prepare("INSERT INTO subscription (email, subscription_date) VALUES (:email, :subscription_date)");
			$stmt->execute(['email'=>$email, 'subscription_date'=>$now]);
			$_SESSION['success'] = 'Email added successfully';

		}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
		}
			$pdo->close();
			echo "
				<script>
					alert('Success! Thank you for subscribing!');
					setTimeout(function(){
						location.href = 'index.php';
					}, 500);
				</script>
			";
	}
	else {
		echo "
			<script>
				alert('There was an error. Please try again.');
				setTimeout(function(){
						location.href = 'index.php';
				}, 500);
			</script>
		";
	}
		


?>