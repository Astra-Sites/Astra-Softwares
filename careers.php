  <?php 
  include('./config/database.php'); 
   $pageTitle  = "Join Our Team: Careers at Astra Softwares";
   include ('./includes/header.php');
  ?>

   <!-- Hero -->
   <section class="section-header pb-9 pb-lg-10 mb-4 mb-lg-6 bg-primary text-white">
      <div class="container">
         <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-7">
               <h1 class="display-1 font-weight-extreme mb-4">Join our team</h1>
               <p class="lead mb-4 mb-lg-5 me-lg-5">At Astra Softwares, we're more than just developers — we're innovators, problem-solvers, and digital visionaries. If you're passionate about technology, creativity, and making a real impact, we’d love to work with you. Let’s build the future, together.</p>
               <a class="btn btn-tertiary" href="#">Explore Opportunities <span class="fas fa-angle-right ms-2"></span></a>
            </div>
            <div class="col-12 col-md-5 d-none d-lg-block text-center"><img src="static/assets/img/illustrations/about-illustration.svg" alt="girl meditating"></div>
         </div>
      </div>
   </section>
   
   <section class="section section-lg pt-0">
      <div class="container mt-n8 mt-lg-n10 z-2">
         <div class="row">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
               <div class="card bg-white shadow border-gray-300 p-4">
                  <div class="card-body p-3">
                     <div class="icon icon-lg icon-primary justify-content-start mb-3"><span class="fas fa-award"></span></div>
                     <h4 class="mb-4">Authenticity</h4>
                     <p>We believe in being genuine—in our interactions and commitments. What you see is what you get, and we take pride in delivering real value without pretenses.</p>
                  </div>
               </div>
            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
               <div class="card bg-white shadow border-gray-300 p-4">
                  <div class="card-body p-3">
                     <div class="icon icon-lg icon-primary justify-content-start mb-3"><span class="fab fa-leanpub"></span></div>
                     <h4 class="mb-4">Credibility</h4>
                     <p>Our reputation is built on a strong foundation of expertise, reliability, and proven results. Clients trust us because we consistently deliver on our promises with excellence.</p>
                  </div>
               </div>
            </div>
            <div class="col-12 col-lg-4">
               <div class="card bg-white shadow border-gray-300 p-4">
                  <div class="card-body p-3">
                     <div class="icon icon-lg icon-primary justify-content-start mb-3"><span class="fas fa-glasses"></span></div>
                     <h4 class="mb-4">Transparency</h4>
                     <p>No barriers. We work closely with our partners to create projects of value. When issues arise, we address it together and talk freely.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section section-lg pt-0">
      <div class="container">
         <div class="row justify-content-center mb-5 mb-lg-6">
            <div class="col-12 text-center">
               <h2 class="h1 mb-3" id="positions">Open Positions</h2>
               <p class="lead px-5 px-lg-7">We are always looking for creative, talented self-starters to join the Astra Softwares family. Check out our open positions and fill out an application.</p>
            </div>
         </div>


     <div class="row">
      <?php
      $sql = "SELECT * FROM Job ORDER BY id DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
         while ($job = $result->fetch_assoc()) {
      ?>
       <div class="col-12 mb-4">
            <div class="card bg-white shadow border-gray-300">
                  <div class="card-body p-4 p-lg-5">
                     <div class="row">
                        <div class="col-12 col-md-6 mb-4 mb-lg-0">
                              <h3 class="mb-3"><?= htmlspecialchars($job['job_title']) ?></h3>
                              <p class="text-gray mb-4"><?= htmlspecialchars(implode(' ', array_slice(explode(' ', $job['intro']), 0, 30))) ?>...</p>
                              <div class="d-sm-flex">
                                 <a href="#"><span class="fas fa-map-marker-alt"></span><span class="h6 text-sm ms-2"><?= htmlspecialchars($job['location']) ?></span></a>
                                 <div class="ms-sm-4 mt-1 mt-sm-0">
                                    <span class="fas fa-user-tie text-secondary"></span>
                                    <span class="h6 text-sm ms-2"><?= htmlspecialchars($job['employment_type']) ?></span>
                                 </div>
                              </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-md-end">
                              <a href="https://forms.gle/QLBdvB54NUk9cUiP7" class="btn btn-secondary me-3 animate-up-2 m-0">Apply</a>
                              <a href="job_details.php?id=<?= $job['id'] ?>" class="btn btn-primary animate-up-2 m-0">
                                 <i class="fas fa-clipboard-list me-2"></i>See Details
                              </a>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      <?php
         }
      } else {
         echo "<p>No job listings found.</p>";
      }
      ?>
 </div>

</div>
</section>



<?php
  include ('./includes/footer.php');
?>

