<?php
include('./config/database.php');

$blogs = [];

$sql = "SELECT id, blog_json FROM blog ORDER BY id DESC LIMIT 2";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blog = json_decode($row['blog_json'], true);
        $blog['id'] = $row['id']; // attach the ID to the blog array
        $blogs[] = $blog;
    }
}

$conn->close();
?>

<?php
   $pageTitle  = "Custom Software & AI Solutions for Global & Local Businesses | Astra Softwares";
   include ('./includes/header.php');
?>

    <!-- Hero section -->
    <section class="section-header overflow-hidden pt-7 pt-lg-8 pb-9 pb-lg-12 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="bootstrap-big-icon d-none d-lg-block">
                        <img src="static/assets/img/brand/logo1.png" width="700" height="622" class="d-block my-1" alt="Logo" style="max-width:100%; height:auto; filter: invert(2) brightness(100);" >
                    </div>
                    <h1 class="fw-bolder display-2">We are The Future!</h1>
                    <h2 class="lead fw-normal text-muted mb-4 px-lg-10">We are an AI & Software company focused on developing intelligent applications, automation tools, and scalable systems that empower businesses and organizations to thrive in the digital space.</h2>
                    <!-- Button Modal -->
                    <div class="d-flex justify-content-center align-items-center mb-5">
                        <a href="about.php" class="btn btn-tertiary mb-3 mt-2 me-2 me-md-3 animate-up-2"><span
                                class="fas fa-th-large me-2"></span> <span class="d-none d-md-inline">More About us </span> <span class="d-md-none">Components</span></a>
                        <a class="github-button" href="https://github.com/astrasoftwares"
                            data-color-scheme="no-preference: dark; light: light; dark: light;"
                            data-icon="octicon-star" data-size="large" data-show-count="true"
                            aria-label="Star Astrasoftwares on GitHub">Star</a>
                    </div>
                    <div class="d-flex justify-content-center flex-column mb-6 mb-lg-5">
                        <a href="#" class="d-block text-center mx-auto" target="_self">
                            <img src="static/assets/img/brand/logo1.png" class="d-block mx-auto mb-3" height="25"
                                width="25"  alt="Astra Softwares Logo">
                            <span class="text-muted font-small">Astra Softwares</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

            <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2"><svg class="fill-white"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
        </svg>
    </figure>

        </section>
        <div class="section py-0">
            <div class="container mt-n10 mt-lg-n12 z-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10"><img src="static/assets/img/presentation/hero2.png"
                            alt="Pixel Free Mockup" width="100%"></div>
                </div>
            </div>
        </div>

        <section class="section section-lg">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fas fa-puzzle-piece text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">1500+</h3>
                        <p class="text-gray">Completed Projects</p>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fas fa-building text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">15+</h3>
                        <p class="text-gray">Partners & Member Orgs</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fab fa-sass text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">Workflow</h3>
                        <p class="text-gray">300+ Business Workflows Automated</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fa fa-code text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">200+</h3>
                        <p class="text-gray">Tech & tools</p>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-12 col-lg-5 mb-5 mb-lg-0 order-lg-2">
                        <h2 class="h1">Software Development</h2>
                        <p class="mb-4 lead fw-bold">Custom software for businesses of all sizes</p>
                        <p class="mb-4">Astra Softwares is a software development company that builds modern websites, desktop applications, and mobile apps for clients across the globe. We work with businesses of all sizes, delivering custom solutions that are scalable, user-friendly, and tailored to specific needs. Our mission is to empower organizations through innovative and reliable software that drives growth and efficiency.</p>
                        <a href="web_portfolio.php" target="_self"
                            class="btn btn-outline-primary"><span class="fas fa-book me-2"></span> See our Work</a>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-1">
                        <img src="static/assets/img/sections-mockup.jpg" alt="Front pages overview">
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h2 class="h1 d-flex align-items-center">AI Solutions <span
                                class="badge-md ms-3 mb-0 fs-6 badge rounded-pill text-white bg-tertiary">Beta</span>
                        </h2>
                        <p class="mb-4 lead fw-bold">Automating tasks & improving decision-making</p>
                        <p class="mb-4">We create AI tools for a wide range of sectors, including education, health, agriculture, compliance, and customer support. Whether it's powering smart learning platforms, automating workflows in agri-tech, or assisting users through
                             conversational interfaces, we tailor AI systems to match the specific needs of each industry.</p>
                        <a href="./includes/soon.php"
                            target="_self" class="btn btn-primary mt-2 animate-up-2">
                            <span class="fas fa-th-large me-2"></span>
                            Explore our Work
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img src="static/assets/img/illustrations/pair-programming.svg" alt="MapBox Leaflet.js Custom Integration Mockup">
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5 order-lg-2 mb-5 mb-lg-0">
                        <h2 class="h1 d-flex align-items-center">Education & Training<span
                                class="badge-md ms-3 mb-0 fs-6 badge rounded-pill text-white bg-tertiary">Beta</span>
                        </h2>
                        <p class="mb-4 lead fw-bold">Learn in-demand tech skills through our Portfolio Ready program</p>
                        <p class="mb-4">We offer practical, project-based training for students, beginners, and professionals through our learning platform, Portfolio Ready. Our goal is to equip learners
                             with real-world coding and AI skills that are aligned with current industry demands.</p>
                        <a href="./includes/maintain.php" target="_self"
                            class="btn btn-tertiary animate-up-2"><span class="fas fa-chart-line me-2"></span> Explore
                            Portfolio Ready</a>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-1">
                        <img src="static/assets/img/illustrations/developer_activity.svg" alt="Dashboard Preview">
                    </div>
                </div>
            </div>
        </section>



    <div class="section section-sm pb-0 mb-n4">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-center">Our Blog</h3>
            </div>
        </div>
    </div>

   

<!--End of Title section-->
<div class="row mb-5 section section-lg d-flex align-items-center justify-content-center blog-scroll-row" style="overflow-x: auto; white-space: nowrap; scroll-behavior: smooth;">
    <?php foreach ($blogs as $blog): ?>
        <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 d-inline-block blog-card-hover" style="float: none;">
            <div class="card shadow">
                <?php if (!empty($blog['banner'])): ?>
                    <div class="position-relative" style="height: 250px; background-image: url('<?= htmlspecialchars($blog['banner']) ?>'); background-size: cover; background-position: center; border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5); border-top-left-radius: .5rem; border-top-right-radius: .5rem;"></div>
                        <h4 class="card-title position-absolute bottom-0 start-0 text-white p-3 m-0" style="z-index: 2; text-transform: capitalize; text-wrap:wrap"><?= htmlspecialchars($blog['title']) ?></h4>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <span class="h6 icon-tertiary small">
                        <span class="fas fa-medal me-2"></span>Blog
                    </span>
                    <p class="card-text" style="text-wrap:wrap">
                        <?= isset($blog['content'][0]['body']) ? substr(strip_tags($blog['content'][0]['body']), 0, 100) . '...' : 'No preview available.' ?>
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small class="text-muted">
                            By <strong><?= htmlspecialchars($blog['author'] ?? 'Unknown') ?></strong>
                            <?php if (!empty($blog['date'])): ?>
                                on <?= htmlspecialchars($blog['date']) ?>
                            <?php endif; ?>
                        </small>
                        <a href="blog_details.php?id=<?=urlencode($blog['id'])?>" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>                
    
    <div class="container text-center mt-5">
       <a href="blogs.php" class="btn btn-primary btn-sm">More News & Updates</a>
    </div>
</div>



<style>
.blog-scroll-row {
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    padding-bottom: 10px;
    position: relative;
}
.blog-card-hover {
    transition: transform 0.3s;
}
.blog-card-hover:hover {
    transform: scale(1.03);
    z-index: 2;
}
</style>
<script>
(function() {
    const row = document.querySelector('.blog-scroll-row');
    let scrollInterval;
    let isHovered = false;

    function startAutoScroll() {
        if (scrollInterval) return;
        scrollInterval = setInterval(() => {
            if (!isHovered) {
                row.scrollLeft += 1;
                // Infinite loop: if at end, scroll back to start
                if (row.scrollLeft + row.clientWidth >= row.scrollWidth - 1) {
                    row.scrollLeft = 0;
                }
            }
        }, 20);
    }

    function stopAutoScroll() {
        clearInterval(scrollInterval);
        scrollInterval = null;
    }

    row.addEventListener('mouseenter', function() {
        isHovered = true;
    });
    row.addEventListener('mouseleave', function() {
        isHovered = false;
    });

    // Pause on hover of any card
    row.querySelectorAll('.blog-card-hover').forEach(card => {
        card.addEventListener('mouseenter', () => { isHovered = true; });
        card.addEventListener('mouseleave', () => { isHovered = false; });
    });

    startAutoScroll();
})();
</script>

  


<section class="section section-lg bg-white" id="download">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="h1 font-weight-light mb-3"><strong>Open source</strong> Contributions</h2>
                <p class="lead mb-4">Astra Softwares actively supports and contributes to open source projects. We build tools, share knowledge, and collaborate with
                     developers around the world to help improve software accessibility, innovation, and transparency.</p>
                <div class="d-flex align-items-center">
                    <a href="hhttps://github.com/astrasoftwares/awesome-useful-projects" target="_self"
                        class="btn btn-github me-4 animate-up-2">
                        View on GitHub
                    </a>
                    <!-- Place this tag where you want the button to render. -->
                    <div class="mt-2">
                        <!-- Place this tag where you want the button to render. -->
                        <a class="github-button" href="https://github.com/astrasoftwares"
                            data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                            data-size="large" data-show-count="true"
                            aria-label="Star astrasoftwares on GitHub">Star</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="github-big-icon">
                    <span class="fab fa-github"></span>
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="card border-gray-300 p-4">
                    <!-- Header -->
                    <div class="card-header bg-white border-0 pb-0">
                        <span class="d-block">
                            <span class="h2 text-primary fw-bold align-top">Open by Request</span>
                        </span>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div class="card-body">
                        <ul class="list-group list-group-flush price-list">
                            <li class="list-group-item bg-white border-0 ps-0"><strong>80+</strong> Projects</li>
                            <li class="list-group-item bg-white border-0 ps-0"><strong>6</strong> Contributor badges</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-success"><span
                                        class="fas fa-check-circle"></span></span> Comments</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-success"><span
                                        class="fas fa-check-circle"></span></span> Upload files</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-success"><span
                                        class="fas fa-check-circle"></span></span> Edit files</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-danger"><span
                                        class="fas fa-times-circle"></span></span> Download Files</li>
                            <li class="list-group-item bg-white border-0 ps-0 pb-0"><span class="icon-danger"><span
                                        class="fas fa-times-circle"></span></span> Owner Access</li>
                            <li class="list-group-item bg-white border-0 ps-0 pb-0"><span class="icon-danger"><span
                                        class="fas fa-times-circle"></span></span> API Access</li>
                            <li class="list-group-item bg-white border-0 ps-0 pb-0"><span class="icon-danger"><span
                                        class="fas fa-times-circle"></span></span> Commercial Use</li>
                        </ul>
                    </div>
                    <a href="./includes/maintain.php" target="_self" class="btn btn-outline-dark w-100 mb-3"><i class="fas fa-cloud-download-alt me-2"></i>Request Access</a>
                    <!-- End Content -->
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="card border-gray-300 p-4 mt-lg-n4">
                    <!-- Header -->
                    <div class="card-header bg-white border-0 pb-0">
                        <span class="d-block">
                            <span class="h2 text-primary fw-bold align-top">Community Projects</span>
                        </span>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div class="card-body">
                        <ul class="list-group list-group-flush price-list">
                            <li class="list-group-item bg-white border-0 ps-0"><strong>1000+</strong> Components</li>
                            <li class="list-group-item bg-white border-0 ps-0"><strong>35</strong> Contributor badges</li>
                            <li class="list-group-item bg-white border-0 ps-0">Dashboard included</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-success"><span
                                        class="fas fa-check-circle"></span></span> Uncoventional cards</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-success"><span
                                        class="fas fa-check-circle"></span></span> API Access</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-success"><span
                                        class="fas fa-check-circle"></span></span> Download files</li>
                            <li class="list-group-item bg-white border-0 ps-0"><span class="icon-success"><span
                                        class="fas fa-check-circle"></span></span> Owner Access</li>
                            <li class="list-group-item bg-white border-0 border-0 ps-0 pb-0"><span
                                    class="icon-success"><span class="fas fa-check-circle"></span></span> Commercial Use</li>
                        </ul>
                    </div>
                    <a href="includes/soon.php" target="_self" class="btn btn-tertiary w-100 mb-3">Contribute on GitHub <i class="fas fa-external-link-square-alt ms-2"></i></a>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </div>
</section>



<!-- contact form -->
 <?php
   include './includes/contact_form.php'
  ?>
<!--End of Contact form -->


 <div class="section section-sm pb-0 mb-n4" id="components">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center">Our Testimonials</h3>
        </div>
    </div>
</div>
<div class="section section-md">
<div class="container">

<div class="elfsight-app-26c68c9c-969c-4eac-96e3-c0a9214e5a18" data-elfsight-app-lazy></div>

</div>
</div>

<div class="section section-sm pb-0 mb-n4" id="components">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center">Frequently Asked Questions</h3>
        </div>
    </div>
</div>

        <!--End of Title section-->
<div class="section section-md">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-lg-8">
                <!--Accordion-->
                <div class="accordion" id="accordionExample1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What services does Astra Softwares offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <strong>Astra Softwares</strong> is a full-service technology company specializing in <strong>artificial intelligence</strong>, custom <strong>software development</strong>, and <strong>educational technology</strong>. We build intelligent systems for industries such as health, agriculture, and compliance, and we also offer complete web and mobile solutions tailored to our clients’ needs. Through our Portfolio Ready program, we help students and developers gain practical coding skills with the help of AI tools. Whether you're a startup, business, or school, we provide flexible digital solutions to match your goals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can I collaborate or contribute to your open-source projects?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                               Yes, we actively support open source! We maintain and 
                               contribute to a number of public repositories designed 
                               for developers, educators, and businesses. Some of our
                                projects are fully open for the community to contribute,
                                 while others—especially those related to client-sensitive
                                  tools like mental health or compliance—require request-based access 
                                  to maintain security and privacy. We believe in building a
                                   responsible open-source community, and we welcome developers,
                                    students, and professionals to join us in contributing to meaningful projects.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you offer complete packages that include both branding and software?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                Absolutely. Through our collaboration with Fremax Graphics,
                                 we are able to deliver comprehensive business packages that 
                                 include everything from software development to visual branding.
                                  This means when you come to Astra Softwares for a custom application,
                                   website, or AI solution, you can also get professional logos,
                                    business cards, promotional materials,
                                and more — all tailored to match your digital product. It’s 
                                a one-stop solution designed to streamline your launch or upgrade process.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  What is Portfolio Ready, and how is it connected to Code.org?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                Portfolio Ready is our flagship education initiative aimed at helping
                                 beginners and aspiring developers build real-world coding skills using 
                                 AI-powered guidance. The platform offers hands-on projects, coding tutorials,
                                  and access to an AI tutor that helps students improve their portfolio step by step.
                                We also collaborate with Code.org to promote early access to computer science 
                                education. Through this partnership, we support schools and learners with 
                                open educational resources, training, and tools to help students discover
                                 the power of code from a young age. Our mission is to make quality tech 
                                 education accessible, practical, and AI-driven for learners across all backgrounds.
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Accordion-->
            </div>
        </div>
    </div>
 </div>





<!-- Elfsight Google Reviews | Untitled Google Reviews -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>



<?php
  include ('./includes/footer.php');
?>