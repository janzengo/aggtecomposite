<style>
    .preloader{position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999999; background-color:#ffffff; background-position:center center;	background-repeat:no-repeat; background-image:url(../../images/preloader.gif);}
</style>
<!-- Mail Email -->
<?php 
    if(isset($_POST['submit'])){
    $from = $_POST['email']; 
    $clientName = $_POST['clientName'];
    $to = "admin@aggtedeck.com";
    //array initializations
    $headers = "From: $from";
    $mainMessage = $_POST['rq-message'];
    $phone = $_POST['phone_number'];
    $subject = "New Inquiry from $clientName!"; 
    $radioSelection = $_POST['call'];
    $message = "From: $from\n" . "Client Name: $clientName \n" . "Client Contact Number: $phone \n" . "Call: $radioSelection \n";
    $message .= "\nMessage: $mainMessage \n";
    $ok = mail($to, $subject, $message, $headers); 
	if ($ok) {
        $senderEmail = $_POST["email"];
        $confSubject = "AGGTEDeck: Your recent inquiry";
        $confHeader = "From: AGGTEDeck WPC Cladding & Decking <no-reply@aggtedeck.com>";
        $sendMessage = "Your email: $senderEmail \n";
        $sendMessage .= "Hi $clientName! \nThank you for your inquiries. A member of our team will respond to your message as soon as possible.\n";
        $sendMessage .= "\nRegards, \n -AGGTEDeck WPC Cladding & Decking Team\n";
        mail($senderEmail, $confSubject, $sendMessage, $confHeader);

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