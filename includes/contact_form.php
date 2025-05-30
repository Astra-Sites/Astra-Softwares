<?php

// Load Composer's autoloader
include 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer; // Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\Exception; // Import PHPMailer classes into the global namespace
Use Dotenv\Dotenv; // Import Dotenv classes into the global namespace


// Load environment variables
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['GMAIL_USERNAME'];
        $mail->Password = $_ENV['GMAIL_APP_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($_ENV['GMAIL_USERNAME'], 'Astra Softwares');
        $mail->addAddress($_ENV['GMAIL_USERNAME'], 'Astra Softwares');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Form Submission</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            </head>
            <body style="background-color:#f8f9fa;">
            <div class="container py-5">
                <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Contact Form Submission</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> <span class="text-dark">'.htmlspecialchars($name).'</span></p>
                        <p><strong>Email:</strong> <span class="text-dark">'.htmlspecialchars($email).'</span></p>
                        <p><strong>Message:</strong></p>
                        <div class="alert alert-secondary" style="white-space: pre-line;">'.nl2br(htmlspecialchars($message)).'</div>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Sent from Astra Softwares Contact Form</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </body>
            </html>
        ';
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nMessage:\n{$message}";

        $mail->send();
        // Bootstrap Toast markup
        echo '
        <div aria-live="polite" aria-atomic="true" class="position-fixed bottom-0 end-0 p-3 " style="z-index: 1080;">
            <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex bg-success">
                    <div class="toast-body  text-white">
                        Your message has been sent successfully!
                    </div>
                    <button type="button" class="btn-close btn-close-dark me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var toastEl = document.querySelector(".toast");
            if (toastEl) {
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
            }
        </script>
        ';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


?>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <!-- Contact Card -->
            <div class="card border-0 p-2 p-md-3 p-lg-5">
                <div class="card-header bg-white border-0 text-center">
                    <h2>Want to work with us?</h2>
                    <p>Great! Let’s talk about your project</p>
                </div>
                <div class="card-body pt-0">
                 <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="name">Your Name</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3"><span class="fas fa-user-circle"></span></span>
                                <input type="text" class="form-control" name="name" placeholder="e.g. John Doe" id="name" required>
                            </div>
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon4"><span class="fas fa-envelope"></span></span>
                                <input type="email" class="form-control" name="email" placeholder="example@company.com" id="email" required>
                            </div>
                        </div>
                        <!-- End of Form -->

                        <div class="mb-4">
                            <label for="message">Your Message</label>
                            <textarea placeholder="Your message" name="message" class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <!-- End of Form -->

                        <div class="d-grid">
                            <button type="submit" class="btn btn-secondary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Contact Card -->
        </div>
    </div>


      