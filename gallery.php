

  <?php
  $pageTitle  = "Astra Softwares | Innovative Solutions for your Digital space";
  include ('./includes/header.php');
  ?>


<?php
// gallery.php

// Define the base directory (adjust as needed)
$baseDir = __DIR__;
$imageFolder = $baseDir . '/static/assets/img/carousel/';

// Get all image files
$imageFiles = [];
if (file_exists($imageFolder)) {
    $allFiles = scandir($imageFolder);
    foreach ($allFiles as $file) {
        $lower = strtolower($file);
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
            $imageFiles[] = "static/assets/img/carousel/" . $file; // Relative path from 'static'
        }
    }
}

// Pagination
$perPage = 12;
$totalImages = count($imageFiles);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1);
$offset = ($page - 1) * $perPage;
$pageImages = array_slice($imageFiles, $offset, $perPage);

// Calculate total pages
$totalPages = ceil($totalImages / $perPage);

// Render HTML (replace with your templating engine or plain PHP view)
?>


<!-- hero -->
<div class="hero d-flex align-items-center justify-content-center text-center bg-dark text-white position-relative" style="min-height: 350px;">
  <div class="hero-overlay position-absolute w-100 h-100" style="top:0;left:0; background: var(--bs-dark);"></div>
  <div class="hero-content position-relative z-2">
    <h1 class="display-4 fw-bold mb-3" style="text-shadow: 0 2px 8px #000;">Gallery</h1>
    <p class="lead" style="text-shadow: 0 1px 4px #000;">Explore our collection of images.</p>
  </div>
</div>
<!-- end hero -->
<div class="container-fluid py-5 bg-light">
  <div class="row g-3">
    <?php foreach ($pageImages as $img_url): ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="img-wrapper rounded shadow-sm overflow-hidden position-relative gallery-hover">
          <img src="<?php echo htmlspecialchars($img_url); ?>" class="gallery-img" loading="lazy" alt="Gallery Image">
          <div class="img-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
            <span class="text-white fs-5 fw-semibold">View</span>
          </div>
        </div>
  </div>
    <?php endforeach; ?>
</div>

  <style>
    .gallery-img {
      width: 100%;
      object-fit: cover;
      height: 260px;
      transition: transform 0.3s cubic-bezier(.4,2,.6,1), filter 0.3s;
      filter: brightness(0.95);
      display: block;
    }
    .img-wrapper {
      padding: 0;
      margin: 0;
      background: #fff;
      position: relative;
      cursor: pointer;
      transition: box-shadow 0.2s;
    }
    .img-wrapper:hover,
    .img-wrapper:focus {
      box-shadow: 0 8px 32px rgba(0,0,0,0.18);
    }
    .gallery-hover .img-overlay {
      opacity: 0;
      background: rgba(0,0,0,0.35);
      transition: opacity 0.3s;
      pointer-events: none;
    }
    .gallery-hover:hover .img-overlay,
    .gallery-hover:focus .img-overlay {
      opacity: 1;
      pointer-events: auto;
    }
    .gallery-hover:hover .gallery-img,
    .gallery-hover:focus .gallery-img {
      transform: scale(1.04);
      filter: brightness(1.08);
    }
    @media (max-width: 576px) {
      .gallery-img { height: 160px; }
    }
  </style>

  <div class="pagination mt-5 d-flex justify-content-center">
    <nav>
      <ul class="pagination pagination-lg mb-0">
        <?php if ($page > 1): ?>
          <li class="page-item">
            <a class="page-link" href="?page=1" aria-label="First">&laquo;</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
          </li>
        <?php else: ?>
          <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
          <li class="page-item disabled"><span class="page-link">Previous</span></li>
        <?php endif; ?>

        <li class="page-item active">
          <span class="page-link">
            Page <?php echo $page; ?> of <?php echo $totalPages; ?>
          </span>
        </li>

        <?php if ($page < $totalPages): ?>
          <li class="page-item">
            <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="?page=<?php echo $totalPages; ?>" aria-label="Last">&raquo;</a>
          </li>
        <?php else: ?>
          <li class="page-item disabled"><span class="page-link">Next</span></li>
          <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</div>


<!-- end of gallery --> 





  <!-- contact form -->
    <?php
    include './includes/contact_form.php'
    ?>
  <!--End of Contact form -->


  <!-- visit our media terms and conditions -->
<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <h2 class="text-center mb-4">Media Terms and Conditions</h2>
      <p class="text-muted text-center">Please read our <a href="terms.php#event-participation-media-usage">Terms and Conditions</a> for using media from this gallery.</p>
    </div>
  </div>
</div>


<!-- script to display bigger image onclick -->
<script>
  document.querySelectorAll('.gallery-hover').forEach(item => {
    item.addEventListener('click', () => {
      const imgSrc = item.querySelector('.gallery-img').src;
      const modal = document.createElement('div');
      modal.className = 'modal fade show';
      modal.style.display = 'block';
      modal.innerHTML = `
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"> &copy; Astra Softwares </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
              <img src="${imgSrc}" class="img-fluid" alt="Preview Image">
            </div>
          </div>
        </div>`;
      document.body.appendChild(modal);
      modal.addEventListener('click', () => {
        modal.remove();
      });
    });
  });

</script>


<?php
  include ('./includes/footer.php');
?>
