<style>
    .preloader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 99999999;
        background-color: #ffffff;
        background-position: center center;
        background-repeat: no-repeat;
        background-image: url(../../images/preloader.gif);
    }
</style>
<div class="preloader">
</div>
<!-- Mail Email -->
<?php
if (isset($_POST['submit'])) {

    //array initializations
    $mainMessage = $_POST['req-message'];
    $to = "info@aggtedeck.com";
    $clientName = $_POST['clientName'];
    $phone = $_POST['phone_number'];
    $subject = "New Inquiry from $clientName!";
    $from = $_POST['email'];
    $headers = "From: $from";
    $radioSelection = $_POST['call'];
    $message = "From: $from\n" . "Client Name: $clientName \n" . "Client Contact Number: $phone \n" . "Call: $radioSelection \n";
    $message .= "\nMessage: $mainMessage \n";
    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        $clientName = $_POST['clientName'];
        $senderEmail = $_POST["email"];
        $confSubject = "AGGTEDeck: Your recent inquiry";
        $confHeader = "From: AGGTEDeck WPC Cladding & Decking <no-reply@aggtedeck.com>";
        $sendMessage = "Your email: $senderEmail \n";
        $sendMessage .= "Hi $clientName! \nThank you for your inquiries. A member of our team will respond to your message as soon as possible.\n";
        $sendMessage .= "\nRegards, \n -AGGTEDeck WPC Cladding & Decking Team\n";
        mail($senderEmail, $confSubject, $sendMessage, $confHeader);
    } else {
        echo "<script>
            window.setTimeout(function() {
            window.location.href='errorcon.php';
            }, 2000);
            </script>";
    }
    session_destroy();
    echo "<script>
            window.setTimeout(function() {
            window.location.href='../../confirmation.php?from=contacts';
            }, 2000);
        </script>";
}
?>
