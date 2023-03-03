<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="css/altModals.css" rel="stylesheet">
<?php include 'includes/session.php'; ?>
<div id="preload" class="preloader">
</div>
<style>
	#invis {
		opacity: 0%;
	}
</style>
<div id="invis">
<?php include 'includes/header.php'; ?>
<body class="hold-transition layout-top-nav" onload="load()">
	<?php include 'category.php'; ?>
	      <!-- Main content -->
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>

  	<?php include '../footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/links.php' ?>

</body>
</div>
<script>
    $(document).ready(function() {
        $('#preload').load(function() {
        });
    });
	$(window).load(function(){
	$( "#invis" ).animate({ opacity: 1 }, 1000);
    $('.preloader').fadeOut(500);
});
</script>
</html>
