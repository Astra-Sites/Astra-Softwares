<?php
$baseUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/astrasoft";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $pageTitle ?? 'Astra Softwares | Innovative Solutions for your Digital space' ?></title>


<!-- Primary Meta Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Astra Softwares – Transforming the Digital World">
<meta name="keywords" content="AI software development, global software company, AI integration, website development, mobile app development, desktop applications, AI customer support, automation tools, intelligent education systems, software solutions, Astra Softwares, Best Software Company in Kenya, Web Developers">
<meta name="author" content="Astra Softwares">
<meta name="description" content="Astra Softwares delivers global AI and software development services, including AI systems, websites, desktop and mobile apps tailored for diverse industries.">
<link rel="canonical" href="https://astrasoft.tech">


<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://astrasoft.tech">
<meta property="og:title" content="Astra Softwares – Global AI & Software Development">
<meta property="og:description" content="Partner with Astra Softwares for innovative AI solutions, website, desktop, and mobile app development serving clients worldwide.">
<meta property="og:image" content="<?= $baseUrl ?>/static/assets/img/brand/logo1.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://astrasoft.tech">
<meta property="twitter:title" content="Astra Softwares – Global AI & Software Development">
<meta property="twitter:description" content="Innovative AI integration and software development including websites, desktop, and mobile apps for clients across the globe.">
<meta property="twitter:image" content="<?= $baseUrl ?>/static/assets/img/brand/logo1.png">


<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="<?= $baseUrl ?>/static/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $baseUrl ?>/static/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $baseUrl ?>/static/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?= $baseUrl ?>/static/home/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="<?= $baseUrl ?>/static/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="<?= $baseUrl ?>/static/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="<?= $baseUrl ?>/static/css/pixel.css" rel="stylesheet">
<link type="text/css" href="<?= $baseUrl ?>/static/css/pixel.css.map" rel="stylesheet">


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Astra Softwares",
  "url": "https://astrasoft.tech",
  "logo": "https://astrasoft.tech/static/assets/img/brand/logo1.png",
  "description": "Astra Softwares delivers global AI and software development services, including AI systems, websites, desktop and mobile apps tailored for diverse industries.",
  "sameAs": [
    "https://www.facebook.com/astrasoftwares",
    "https://twitter.com/astrasoftwares",
    "https://www.linkedin.com/company/astrasoftwares"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+254727405667",
    "contactType": "Customer Service",
    "areaServed": "Worldwide",
    "availableLanguage": ["English"]
  },
  "founder": {
    "@type": "Person",
    "name": "Ishmael Bett"
  },
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "KE"
  }
}
</script>


</head>
<body>
<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand me-lg-5" href="<?= $baseUrl ?>/index.php">
                <img class="navbar-brand-dark" src="<?= $baseUrl ?>/static/assets/img/brand/logo1.png"  style="filter: invert(2) brightness(100);" alt="AstraSoftwares logo">
                <img class="navbar-brand-light" src="<?= $baseUrl ?>/static/assets/img/brand/Logo.png" style="filter: invert(2) brightness(100);" alt="AstraSoftwares logo">
            </a>
            <div class="navbar-collapse collapse me-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="index.php">
                                <img src="<?= $baseUrl ?>/static/assets/img/brand/Logo.png" alt="AstraSoftwares logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="frontPagesDropdown" aria-expanded="false" data-bs-toggle="dropdown">
                            Pages
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>
                        <div class="dropdown-menu dropdown-megamenu px-0 py-2 p-lg-4" aria-labelledby="frontPagesDropdown">
                            <div class="row">
                                <div class="col-6 col-lg-4">
                                    <h6 class="d-block mb-3 text-primary">Main pages</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/about.php">About</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/contact.php">Contact</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="#" target="_blank">Services</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/gallery.php" target="_blank">Gallery</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/profile.php" target="_blank">Profile</a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block text-primary">Legal</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/soon.php" target="_blank">Legal center <span class="badge bg-tertiary">soon</span></a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/terms.php" target="_blank">Terms</a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block text-primary">Career</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/careers.php" target="_blank">Careers</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/careers.php" target="_blank">Career Single</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <h6 class="d-block mb-3 text-primary">Landings</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/includes/maintain.php">Portfolio Ready<span class="badge bg-tertiary">new</span></a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/includes/soon.php" target="_blank">Astra Search</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/includes/soon.php" target="_blank">Astra Kilimo <span class="badge bg-tertiary">new</span></a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block mb-3 text-primary">Support</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/contact.php" target="_blank">Support center </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/includes/maintain.php" target="_blank">Support topic<span class="badge bg-tertiary">soon</span></a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block mb-3 text-primary">Blog</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/blog.php" target="_blank">Blog page</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/blog-single.php" target="_blank">Blog post</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <h6 class="d-block mb-3 text-primary">Tools & Tech</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/languages.php">Languages </a>
                                        </li>                                        
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/version.php">Version Control</a>
                                        </li>

                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/hosting.php" target="_blank">Hosting </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/databases.php" target="_blank">Databases </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/ui_tools.php">UI/UX Design</a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block mb-3 text-primary">AI & Quantum</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/ai_tools.php" target="_blank">AI tools </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/quantum.php" target="_blank"> Quantum ML </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dashboardDropdown" aria-expanded="false" data-bs-toggle="dropdown">
                            Top-Pages
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>
                        <div class="dropdown-menu dropdown-megamenu-sm px-0 py-2 p-lg-4" aria-labelledby="dashboardDropdown">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="d-block mb-3 text-primary">Main Pages</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                           <a class="megamenu-link" href="about">About</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="contact">Contact</a>
                                        </li>
                                        <!-- <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="#" target="_blank">Pricing</a>
                                        </li> -->
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="#" target="_blank">Services</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/gallery.php" target="_blank">Gallery</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/profile.php" target="_blank">Profile</a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block mb-3 text-primary">Blog</h6>
                                    <ul class="list-style-none">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/blog.php" target="_blank">Blog page</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/blog-single.php" target="_blank">Blog post</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <h6 class="d-block mb-3 text-primary">Career</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/careers.php" target="_blank">Careers</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/careers.php" target="_blank">Career Single</a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block mb-3 text-primary">Legal</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/terms.php" target="_blank">Terms of service</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" id="componentsDropdown" aria-expanded="false" data-bs-toggle="dropdown">
                            Tech & Tools
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>

                        <div class="dropdown-menu dropdown-megamenu-sm px-0 py-2 p-lg-4" aria-labelledby="componentsDropdown">
                            <div class="row">

                                <div class="col-6 col-lg-4">
                                    <h6 class="d-block mb-3 text-primary">Tools & Tech</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/languages.php">Languages </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/version.php">Version Control</a>
                                        </li>

                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/hosting.php" target="_blank">Hosting </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/databases.php" target="_blank">Databases </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/ui_tools.php">UI/UX Design</a>
                                        </li>
                                    </ul>
                                    <h6 class="d-block mb-3 text-primary">AI & Quantum</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/ai_tools.php" target="_blank">AI tools </a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="megamenu-link" href="<?= $baseUrl ?>/tech/quantum.php" target="_blank"> Quantum ML </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="supportDropdown" aria-expanded="false">
                            Support
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="supportDropdown">
                            <div class="col-auto px-0">
                                <div class="list-group list-group-flush">
                                    <a href="includes/soon.php" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm"><span class="fas fa-file-alt"></span></span>
                                        <div class="ms-4">
                                            <span class="d-block font-small fw-bold mb-0">Documentation<span class="badge badge-sm badge-secondary ms-2">v3.1</span></span>
                                            <span class="small">Examples and guides</span>
                                        </div>
                                    </a>
                                    <a href="<?= $baseUrl ?>/contact.php" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm"><span class="fas fa-microphone-alt"></span></span>
                                        <div class="ms-4">
                                            <span class="d-block font-small fw-bold mb-0">Support</span>
                                            <span class="small">Need help? Ask us!</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <a href="<?= $baseUrl ?>/contact.php" target="_blank" class="btn btn-outline-gray-100 d-none d-lg-inline me-md-3"><span class="fas fa-book me-2"></span> Start a Project</a>
                <a href="<?= $baseUrl ?>/contact.php" target="_blank" class="btn btn-tertiary"><i class="fas fa-comments me-2"></i> Talk to Us</a>
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>




<!-- Preloader -->
<!-- <div class="preloader bg-dark flex-column justify-content-center align-items-center">
<div class="ui-abstergo">
  <div class="abstergo-loader">
    <div></div>
    <div></div>
    <div></div>
  </div>
  <div class="ui-text">
    AstraSoft
    <div class="ui-dot"></div>
    <div class="ui-dot"></div>
    <div class="ui-dot"></div>
  </div>
</div>
</div> -->


<style>
    /* From Uiverse.io by Galahhad */ 
.ui-abstergo {
  --primary: #fff;
  --secondary: rgba(255, 255, 255, 0.3);
  --shadow-blur: 3px;
  --text-shadow-blur: 3px;
  --animation-duration: 2s;
  --size: 1;
}

.abstergo-loader * {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}

.ui-abstergo {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  row-gap: 30px;
  scale: var(--size);
}

.ui-abstergo .ui-text {
  color: var(--primary);
  text-shadow: 0 0 var(--text-shadow-blur) var(--secondary);
  font-family: Menlo, sans-serif;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: baseline;
  -ms-flex-align: baseline;
  align-items: baseline;
  -webkit-column-gap: 3px;
  -moz-column-gap: 3px;
  column-gap: 3px;
}

.ui-abstergo .ui-dot {
  content: "";
  display: block;
  width: 3px;
  height: 3px;
  -webkit-animation: dots var(--animation-duration) infinite linear;
  animation: dots var(--animation-duration) infinite linear;
  -webkit-animation-delay: .4s;
  animation-delay: .4s;
  background-color: var(--primary);
}

.ui-abstergo .ui-dot:nth-child(2) {
  -webkit-animation-delay: .8s;
  animation-delay: .8s;
}

.ui-abstergo .ui-dot:nth-child(3) {
  -webkit-animation-delay: 1.2s;
  animation-delay: 1.2s;
}

.ui-abstergo .ui-dot+.ui-dot {
  margin-left: 3px;
}

.abstergo-loader {
  width: 103px;
  height: 90px;
  position: relative;
}

.abstergo-loader div {
  width: 50px;
  border-right: 12px solid transparent;
  border-left: 12px solid transparent;
  border-top: 21px solid var(--primary);
  position: absolute;
  -webkit-filter: drop-shadow(0 0 var(--shadow-blur) var(--secondary));
  filter: drop-shadow(0 0 var(--shadow-blur) var(--secondary));
}

.abstergo-loader div:nth-child(1) {
  top: 27px;
  left: 7px;
  rotate: -60deg;
  -webkit-animation: line1 var(--animation-duration) linear infinite alternate;
  animation: line1 var(--animation-duration) linear infinite alternate;
}

.abstergo-loader div:nth-child(2) {
  bottom: 2px;
  left: 0;
  rotate: 180deg;
  -webkit-animation: line2 var(--animation-duration) linear infinite alternate;
  animation: line2 var(--animation-duration) linear infinite alternate;
}

.abstergo-loader div:nth-child(3) {
  bottom: 16px;
  right: -9px;
  rotate: 60deg;
  -webkit-animation: line3 var(--animation-duration) linear infinite alternate;
  animation: line3 var(--animation-duration) linear infinite alternate;
}

.abstergo-loader:hover div:nth-child(1) {
  top: 21px;
  left: 14px;
  rotate: 60deg;
}

.abstergo-loader:hover div:nth-child(2) {
  bottom: 5px;
  left: -8px;
  rotate: 300deg;
}

.abstergo-loader:hover div:nth-child(3) {
  bottom: 7px;
  right: -11px;
  rotate: 180deg;
}

@-webkit-keyframes line1 {
  0%,
  40% {
    top: 27px;
    left: 7px;
    rotate: -60deg;
  }

  60%,
  100% {
    top: 22px;
    left: 14px;
    rotate: 60deg;
  }
}

@keyframes line1 {
  0%,
  40% {
    top: 27px;
    left: 7px;
    rotate: -60deg;
  }

  60%,
  100% {
    top: 22px;
    left: 14px;
    rotate: 60deg;
  }
}

@-webkit-keyframes line2 {
  0%,
  40% {
    bottom: 2px;
    left: 0;
    rotate: 180deg;
  }

  60%,
  100% {
    bottom: 5px;
    left: -8px;
    rotate: 300deg;
  }
}

@keyframes line2 {
  0%,
  40% {
    bottom: 2px;
    left: 0;
    rotate: 180deg;
  }

  60%,
  100% {
    bottom: 5px;
    left: -8px;
    rotate: 300deg;
  }
}

@-webkit-keyframes line3 {
  0%,
  40% {
    bottom: 16px;
    right: -9px;
    rotate: 60deg;
  }

  60%,
  100% {
    bottom: 7px;
    right: -11px;
    rotate: 180deg;
  }
}

@keyframes line3 {
  0%,
  40% {
    bottom: 16px;
    right: -9px;
    rotate: 60deg;
  }

  60%,
  100% {
    bottom: 7px;
    right: -11px;
    rotate: 180deg;
  }
}

@-webkit-keyframes dots {
  0% {
    background-color: var(--secondary);
  }

  30% {
    background-color: var(--primary);
  }

  70%, 100% {
    background-color: var(--secondary);
  }
}

@keyframes dots {
  0% {
    background-color: var(--secondary);
  }

  30% {
    background-color: var(--primary);
  }

  70%, 100% {
    background-color: var(--secondary);
  }
}
</style>
<main>