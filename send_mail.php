
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = " muriisaallan39@gmail.com"; //
    $subject = "New Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $language = $_POST["language"];
    $message = $_POST["message"];
    $headers = "From: $email";

    $body = "Name: $name\nEmail: $email\nPreferred Language: $language\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
