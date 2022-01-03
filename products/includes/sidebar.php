<style>
	.btn-hover {
		color: white;
		transition: all ease .3s;
	}
	.btn-hover:hover {
		color: #eee !important;
	}
	.btn-hover:focus {
		color: #eee !important;
	}
</style>
<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}
	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Become a Subscriber</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>Get free updates on the latest products straight to your inbox. We care about your <a data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".priv">privacy</a> and won't share any information.</p>
	    	<form method="POST" action="subscribe.php">
		    	<div class="input-group">
	                <input type="email" name="userEmail" class="form-control" placeholder="Email" style="padding: 23px 12px !important;" required>
	                <span class="input-group-btn">
	                <input type="submit" name="submit" value="Subscribe" class="btn btn-info btn-flat" style="padding: 13px 12px !important;">
	                </span>
	            </div>
		    </form>
			
	  	</div>
	</div>
</div>

<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a target="_blank" href="https://www.facebook.com/wpc.claddingdecking" class="btn-hover btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	    	<a target="_blank" href="https://twitter.com/AggteD"class="btn-hover btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	    	<a target="_blank" href="https://www.instagram.com/aggtedeck/" class="btn-hover btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
	    	<a target="_blank" href="https://www.linkedin.com/company/aggtedeck/" class="btn-hover btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
			<a target="_blank" href="https://www.pinterest.ph/aggtedeck" class="btn-hover btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
	  	</div>
	</div>
</div>
