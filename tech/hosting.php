
<?php
    $pageTitle  = "Astra Softwares | Technology Languages Stack";
    include ('../includes/header.php');
?>

<?php
// Define the image directory

$imageFolder =  '../static/assets/img/logos/hosting/';

// Collect image files
$imageFiles = [];
if (is_dir($imageFolder)) {
    $allFiles = scandir($imageFolder);
    foreach ($allFiles as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
            $imageFiles[] = "../static/assets/img/logos/hosting/" . $file;
        }
    }
}

// Pagination setup
$perPage = 20;
$totalImages = count($imageFiles);
$totalPages = ceil($totalImages / $perPage);
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $perPage;
$pageImages = array_slice($imageFiles, $offset, $perPage);
?>

<section class="section-header bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">Hosting Platforms & Technologies</h1>
                <p>The Technologies and Platforms Powering Our Hosting Solutions</p>
            </div>
        </div>
    </div>
</section>

<section class="section py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-md-8 text-center">
                <h2 class="display-4 mb-3">Hosting Platforms & Technologies</h2>
                <p>Discover the platforms and technologies that power our hosting solutions.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php if (!empty($pageImages)): ?>
                <?php foreach ($pageImages as $img_url): ?>
                    <?php
                    // Extract clean name from filename
                    $filename = basename($img_url);
                    $name = pathinfo($filename, PATHINFO_FILENAME);
                    $name = ucwords(str_replace(['-', '_'], ' ', $name));
                    ?>
                    <div class="col-4 col-sm-2 text-center mb-4">
                        <img src="<?php echo htmlspecialchars($img_url); ?>" alt="<?php echo $name; ?>" class="img-fluid mb-2" style="height:60px;">
                        <div><?php echo $name; ?></div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>No language logos found.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <nav>
                    <ul class="pagination">
                        <?php if ($page > 1): ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">&laquo;</a></li>
                        <?php else: ?>
                            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <?php if ($i == $page): ?>
                                <li class="page-item active"><span class="page-link"><?php echo $i; ?></span></li>
                            <?php else: ?>
                                <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($page < $totalPages): ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">&raquo;</a></li>
                        <?php else: ?>
                            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php
include ('../includes/footer.php');
?>