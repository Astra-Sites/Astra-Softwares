       <?php
        // Initialize variables
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../config/database.php'; // Make sure this file sets up $conn (mysqli)

            $email = trim($_POST['email'] ?? '');
            $password = $_POST['pass'] ?? '';

            if (empty($email) || empty($password)) {
                $error = 'Please enter both email and password.';
            } else {
                // Prepare statement to prevent SQL injection
                $stmt = $conn->prepare('SELECT id, first_name, last_name, user_pass FROM users WHERE email = ?');
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows === 1) {
                    $stmt->bind_result($id, $first_name, $last_name, $hashed_pass);
                    $stmt->fetch();

                    if (password_verify($password, $hashed_pass)) {
                        // Authentication successful
                        session_start();
                        $_SESSION['user_id'] = $id;
                        $_SESSION['user_name'] = $first_name . ' ' . $last_name;
                        header('Location: ../blogger.php');
                        exit;
                    } else {
                        $error = 'Invalid email or password.';
                    }
                } else {
                    $error = 'Invalid email or password.';
                }
                $stmt->close();
            }
        }
        ?>    
      
    <?php 
        $pageTitle  = "Astra Softwares | Stay updated with the latest news & insights";
        include ('../includes/header.php');
    ?>
      
      

    <!-- Hero -->
    <section class="section-header bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-2 mb-1">Sign in to our platform</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Hero section -->

   
        <!-- Section -->
        <section class="min-vh-100 d-flex align-items-center section-image overlay-soft-dark py-5 py-lg-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <?php if (!empty($error)): ?>
                                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                            <?php endif; ?>
                            <form action="" method="post">
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="email">Your email</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend"><span class="input-group-text"><span class="fas fa-envelope"></span></span></div>
                                        <input class="form-control" id="email" name="email" placeholder="example@company.com" type="text" aria-label="email address" required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend"><span class="input-group-text"><span class="fas fa-unlock-alt"></span></span></div>
                                            <input class="form-control" id="password" name="pass" placeholder="Password" type="password" aria-label="Password" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="remember"> <label class="form-check-label" for="remember">Remember me</label></div>
                                        <div><a href="./forgot-password-email.html" class="small text-right">Lost password?</a></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary w-100">Sign in</button>
                            </form>
                            <div class="mt-3 mb-4 text-center"><span class="font-weight-normal">or login with</span></div>
                            <div class="btn-wrapper my-4 text-center"><button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button"><span aria-hidden="true" class="fab fa-facebook-f"></span></button> <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button"><span aria-hidden="true" class="fab fa-twitter"></span></button> <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button"><span aria-hidden="true" class="fab fa-github"></span></button></div>
                            <div class="d-block d-sm-flex justify-content-center align-items-center mt-4"><span class="font-weight-normal">Not registered? <a href="./sign-up.html" class="font-weight-bold">Create account</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 


<?php
include ('../includes/footer.php');
?>
