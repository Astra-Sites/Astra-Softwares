
<?php
$baseUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/astrasoft";
?>


</main>
<footer class="footer pt-6 pb-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="navbar-brand-dark mb-4" height="35" src="<?= $baseUrl ?>/static/assets/img/brand/logo1.png"
                   style="filter: invert(2) brightness(100);" alt="Astra Softwares Logo" >
                <p>Astra Softwares empowers businesses and individuals through innovative AI solutions, custom software development, and hands-on tech education. We build smarter systems and practical digital skills that make an impact.</p>
                <ul class="social-buttons mb-5 mb-lg-0">
                    <li>
                        <a href="#" aria-label="twitter social link"
                            class="icon-white me-2">
                            <span class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-white me-2"
                            aria-label="facebook social link">
                            <span class="fab fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="github social link" class="icon-white me-2">
                            <span class="fab fa-github"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-white me-2" aria-label="linkedin social link">
                            <span class="fab fa-linkedin"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-white me-2" aria-label="Instagram social link">
                            <span class="fab fa-instagram"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-white me-2" aria-label="Youtube social link">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <span class="h5">AstraSoft</span>
                <ul class="footer-links mt-2">
                    <li><a target="_self" href="careers.php">Careers</a></li>
                    <li><a target="_self" href="profile.php">Profile</a></li>
                    <li><a target="_self" href="about.php">About Us</a></li>
                    <li><a target="_self" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <span class="h5">Other</span>
                <ul class="footer-links mt-2">
                    <li><a href="blog.php"
                            target="_self">Blog</a></li>
                    <li>
                        <a href="gallery.php"  target="_self">Gallery</a>
                    </li>
                    <li>
                        <a target="_self" href="terms">Terms</a>
                    </li>
                    <li>
                        <a target="_self" href="contact.php">Support</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-5 mb-lg-0">
                <span class="h5">Subscribe</span>
                <p class="text-muted font-small mt-2">Join our mailing list. We write rarely, but only the best content.
                </p>
                <form action="#">
                    <div class="form-row mb-2">
                        <div class="col-12">
                            <label class="h6 fw-normal text-muted d-none" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email"
                                aria-label="Subscribe form" id="exampleInputEmail3" required>
                        </div>
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-tertiary" data-loading-text="Sending">
                                <span>Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-muted font-small m-0">We’ll never share your details. See our <a class="text-white"
                        href="terms.php#privacy-and-data-protection">Privacy Policy</a></p>
            </div>
        </div>
        <hr class="bg-secondary my-3 my-lg-5">
        <div class="row">
            <div class="col mb-md-0">
                <a href="<?= $baseUrl ?>/index.php" target="_self" class="d-flex justify-content-center mb-3">
                    <img src="<?= $baseUrl ?>/static/assets/img/brand/logo1.png" height="30" class="me-2" alt="astra softwares Logo">
                    <p class="text-white fw-bold footer-logo-text m-0">Astra softwares</p>
                </a>
                <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                    <p class="fw-normal font-small mb-0">Copyright © Astra softwares 2024-<span
                            class="current-year"><script>document.write(new Date().getFullYear())</script></span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Core -->
<script src="<?= $baseUrl ?>/static/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="<?= $baseUrl ?>/static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= $baseUrl ?>/static/vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="<?= $baseUrl ?>/static/vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="<?= $baseUrl ?>/static/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?= $baseUrl ?>/static/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="<?= $baseUrl ?>/static/vendor/vivus/dist/vivus.min.js"></script>
<script src="<?= $baseUrl ?>/static/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Pixel JS -->
<script src="<?= $baseUrl ?>/static/assets/js/pixel.js"></script>
</body>
</html>