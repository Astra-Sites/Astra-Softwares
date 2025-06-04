<?php
include('./config/database.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$error = '';
$success = '';

// Fetch existing blog
$stmt = $conn->prepare("SELECT blog_json FROM blog WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc() ? json_decode($result->fetch_assoc()['blog_json'], true) : null;

if (!$blog) {
    die("Blog not found.");
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog['title'] = $_POST['title'];
    $blog['author'] = $_POST['author'];
    $blog['date'] = $_POST['date'];
    $blog['banner'] = $_POST['banner'];

    // Update the first content block for simplicity
    $blog['content'][0]['type'] = $_POST['content_type'];
    $blog['content'][0]['heading'] = $_POST['heading'];
    $blog['content'][0]['body'] = $_POST['body'];
    $blog['content'][0]['url'] = $_POST['image_url'];
    $blog['content'][0]['caption'] = $_POST['caption'];

    $new_json = json_encode($blog, JSON_UNESCAPED_UNICODE);
    $update = $conn->prepare("UPDATE blog SET blog_json = ? WHERE id = ?");
    $update->bind_param("si", $new_json, $id);

    if ($update->execute()) {
        $success = "Blog updated successfully.";
    } else {
        $error = "Update failed.";
    }
}
?>

<?php include('./includes/header.php'); ?>

<div class="container py-5">
    <h2>Edit Blog</h2>
    <?php if ($error): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>
    <?php if ($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>
    <form method="POST">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($blog['title']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($blog['author']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="<?= htmlspecialchars($blog['date']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Banner Image URL</label>
            <input type="text" name="banner" class="form-control" value="<?= htmlspecialchars($blog['banner']) ?>">
        </div>

        <hr>
        <h4>Content Block</h4>
        <div class="mb-3">
            <label>Type</label>
            <select name="content_type" class="form-control">
                <option value="text" <?= $blog['content'][0]['type'] === 'text' ? 'selected' : '' ?>>Text</option>
                <option value="image" <?= $blog['content'][0]['type'] === 'image' ? 'selected' : '' ?>>Image</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Heading</label>
            <input type="text" name="heading" class="form-control" value="<?= htmlspecialchars($blog['content'][0]['heading'] ?? '') ?>">
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control" rows="4"><?= htmlspecialchars($blog['content'][0]['body'] ?? '') ?></textarea>
        </div>
        <div class="mb-3">
            <label>Image URL (if type is image)</label>
            <input type="text" name="image_url" class="form-control" value="<?= htmlspecialchars($blog['content'][0]['url'] ?? '') ?>">
        </div>
        <div class="mb-3">
            <label>Image Caption</label>
            <input type="text" name="caption" class="form-control" value="<?= htmlspecialchars($blog['content'][0]['caption'] ?? '') ?>">
        </div>

        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="blogs.php" class="btn btn-secondary">Back</a>
    </form>
</div>

<?php include('./includes/footer.php'); ?>
