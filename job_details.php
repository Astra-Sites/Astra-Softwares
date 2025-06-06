<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('location: careers.php');
}

include('./config/database.php'); 

$id = intval($_GET['id']);
$sql = "SELECT * FROM Job WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    die("Job not found.");
}

$job = $result->fetch_assoc();

// Decode the JSON arrays
$responsibilities = array_filter(array_map('trim', explode("\n", $job['responsibilities'])));
$requirements = array_filter(array_map('trim', explode("\n", $job['requirements'])));
$benefits = array_filter(array_map('trim', explode("\n", $job['benefits'])));
?>



<?php
$pageTitle  = "We are Looking for " . htmlspecialchars($job['job_title']);
include ('./includes/header.php');
?>


<!-- Hero -->
<section class="section-header pb-10 pb-lg-11 mb-4 mb-lg-6 bg-primary text-white">
   <div class="container">
      <div class="row justify-content-center">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 text-center mb-4 mb-lg-5">
               <h1 class="display-2 font-weight-extreme mb-4" id="job-title"><?= htmlspecialchars($job['job_title']) ?></h1>
               <div class="d-flex flex-column flex-lg-row justify-content-center">
                  <span class="h5 mb-3 mb-lg-0">
                     <span class="fas fa-map-marker-alt"></span>
                     <span class="ms-3" id="location"><?= htmlspecialchars($job['location']) ?></span>
                  </span> 
                  <span class="ms-lg-5 mb-3 mb-lg-0 h5">
                     <span class="fas fa-user-tie"></span>
                     <span class="ms-3" id="employmentType"><?= htmlspecialchars($job['employment_type']) ?></span>
                  </span> 
                  <span class="ms-lg-5 mb-3 mb-lg-0 h5">
                     <span class="fas fa-file-invoice-dollar"></span>
                     <span class="ms-3" id="salary"><?= htmlspecialchars($job['salary']) ?>K</span>
                  </span>
               </div>
            </div>
            <div class="col col-12 text-center">
               <a href="careers.php" class="btn btn-outline-dark text-white me-3" style="border: 1px solid #fff;">
                  <span class="fas fa-arrow-left me-2"></span>See All Jobs
               </a> 
               <a href="https://forms.gle/QLBdvB54NUk9cUiP7" class="btn btn-tertiary">
                  <span class="fas fa-clipboard-list me-2"></span>Apply Now
               </a>
            </div>
         </div>
      </div>
      <div class="pattern bottom"></div>
   </div>
</section>

<section class="section section-lg pt-0">
   <div class="container mt-n8 mt-lg-n11 z-2">
      <div class="row justify-content-center">
         <div class="col">
            <div class="card border-gray-300 p-3 p-md-5">
               <p class="lead mb-5">
                  <strong class="font-weight-extreme"><?= htmlspecialchars($job['company']) ?></strong> is Looking for 
                  <strong><?= htmlspecialchars($job['job_title']) ?></strong><br> 
                  <?= htmlspecialchars($job['intro']) ?>
               </p>

               <h2>Responsibilities:</h2>
               <ul class="list-unstyled mb-5" id="responsibilities">
                  <?php foreach ($responsibilities as $item): ?>
                  <li class="py-3 lead">
                     <div class="d-flex">
                        <span class="icon icon-sm me-3"><span class="fas fa-arrow-alt-circle-right"></span></span>
                        <div><?= htmlspecialchars($item) ?></div>
                     </div>
                  </li>
                  <?php endforeach; ?>
               </ul>

               <h2>Requirements:</h2>
               <ul class="list-unstyled mb-5">
                  <?php foreach ($requirements as $item): ?>
                  <li class="py-3 lead">
                     <div class="d-flex">
                        <span class="icon icon-sm me-3"><span class="fas fa-plus-circle"></span></span>
                        <div><?= htmlspecialchars($item) ?></div>
                     </div>
                  </li>
                  <?php endforeach; ?>
               </ul>

               <h2>We offer great benefits too!</h2>
               <ul class="list-unstyled mb-5">
                  <?php foreach ($benefits as $item): ?>
                  <li class="py-3 lead">
                     <div class="d-flex">
                        <span class="icon icon-sm text-success me-3"><span class="fas fa-check-circle"></span></span>
                        <div><?= htmlspecialchars($item) ?></div>
                     </div>
                  </li>
                  <?php endforeach; ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>


   <!-- apply section -->
   <section class="section section-lg pt-0">
<div class="col col-12 text-center"><a href="careers.php" class="btn btn-dark text-white  me-3"><span class="fas fa-arrow-left me-2"></span>See All Jobs</a> <a href="https://forms.gle/QLBdvB54NUk9cUiP7" class="btn btn-tertiary"><span class="fas fa-clipboard-list me-2"></span>Apply Now</a></div>
</section>



<?php
  include ('./includes/footer.php');
?>
