<style>
    .preloader{position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999999; background-color:#ffffff; background-position:center center;	background-repeat:no-repeat; background-image:url(../../images/preloader.gif);}
</style>
<!-- Mail Email -->
<?php 
    if(isset($_POST['submit'])){
   
    //array initializations
    $headers = "From: $from";
    $mainMessage = $_POST['rq-message'];
    $to = "info@aggtedeck.com";
    $clientName = $_POST['clientName'];
    $phone = $_POST['phone_number'];
    $subject = "New Inquiry from $clientName!"; 
    $from = $_POST['email']; 
    $radioSelection = $_POST['call'];
    $message = "From: $from\n" . "Client Name: $clientName \n" . "Client Contact Number: $phone \n" . "Call: $radioSelection \n";
    $message .= "\nMessage: $mainMessage \n";
    $ok = mail($to, $subject, $message, $headers); 
	if ($ok) {
        echo "<div class='preloader'></div><center><h1 style='position: relative;top: 250px;font-family:Arial;'>Your message was successfully sent!</h1></center>";
        session_start();
        session_destroy();
        echo "<script>
            window.setTimeout(function() {
            window.location.href='../../faq.php';
            }, 2000);
            </script>";
	} else { 
		echo "<script>
            window.setTimeout(function() {
            window.location.href='errorfaq.php';
            }, 2000);
            </script>";
	}
}
?>

<!-- Email To Sender -->
<?php 
$senderEmail = $_POST["email"];
$confSubject = "AGGTEDeck: Your recent inquiry";
$confHeader = "From: AGGTEDeck WPC Cladding & Decking <no-reply@aggtedeck.com>";
$sendMessage = "Your email: $senderEmail \n";
$sendMessage .= "Hi $clientName! \nThank you for your inquiries. A member of our team will respond to your message as soon as possible.\n";
$sendMessage .= "\nRegards, \n -AGGTEDeck WPC Cladding & Decking Team\n";
mail($senderEmail, $confSubject, $sendMessage, $confHeader);
?>

