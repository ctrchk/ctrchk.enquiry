    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to_email = "enquiry@ctrchk.com"; 
        $subject = "[查詢] New Enquiry from Website [enquiry]";

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        $email_body = "Name: $name\n" .
                      "Email: $email\n" .
                      "Message: $message\n";

        $headers = "From: $email"; // Sender's email address

        if (mail($to_email, $subject, $email_body, $headers)) {
            echo "Enquiry sent successfully!";
        } else {
            echo "Failed to send enquiry.";
        }
    }
    ?>
