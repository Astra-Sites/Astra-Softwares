<?php
use PHPMailer\PHPMailer\PHPMailer;// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\Exception;// Import PHPMailer classes into the global namespace
Use Dotenv\Dotenv;// Import Dotenv classes into the global namespace

// Load Composer's autoloader
include '../vendor/autoload.php';


// Load environment variables
$dotenv = Dotenv::createImmutable('../');
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
        $mail->Body = "
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nMessage:\n{$message}";

        $mail->send();
        echo "<script>alert('Your message has been sent successfully!');</script>";
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


      