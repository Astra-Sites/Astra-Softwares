<?php
include('./config/database.php');

// Get the blog ID from URL and sanitize
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the specific blog by its ID
$stmt = $conn->prepare("SELECT blog_json FROM blog WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $row = $result->fetch_assoc()) {
    $blog = json_decode($row['blog_json'], true);
} else {
    echo "Blog not found.";
    exit;
}

$conn->close();
?>



<?php 
    $pageTitle  = $blog['title'];
    include ('./includes/header.php');
?>


<section class="section-header bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3"><?= htmlspecialchars($blog['title']) ?></h1>
                <a href="blogs.php" class="btn btn-white">← Back to Blogs</a>
            </div>    
        </div>
    </div>
</section>


<div class="container py-5">
    <div class="card shadow">
        <?php if (!empty($blog['banner'])): ?>
            <img src="<?= htmlspecialchars($blog['banner']) ?>" class="card-img-top" alt="Banner">
        <?php endif; ?>
        <div class="card-body">
            <h1 class="card-title"><?= htmlspecialchars($blog['title']) ?></h1>
            <p class="text-muted">
                By <strong><?= htmlspecialchars($blog['author'] ?? 'Unknown') ?></strong> on <?= htmlspecialchars($blog['date'] ?? 'Unknown date') ?>
            </p>
            <hr>
            <?php foreach ($blog['content'] as $block): ?>
                <?php if ($block['type'] === 'text'): ?>
                    <h4><?= htmlspecialchars($block['heading']) ?></h4>
                    <p><?= nl2br(($block['body'])) ?></p>
                <?php elseif ($block['type'] === 'image'): ?>
                    <div class="my-3">
                        <img src="<?= htmlspecialchars($block['url']) ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($block['url']) ?>">
                        <small class="text-muted d-block"><?= htmlspecialchars($block['caption']) ?></small>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    

</div>

<?php include('./includes/footer.php'); ?>
